<?php

App::uses('FileAppModel',  'File.Model');

class Employee extends FileAppModel
{
    public $hasMany = array(
        'Letter' => array(
            'className' => 'FileLetter'
        ),
        'Certificate' => array(
            'className' => 'FileCertificate'
        ),
        'Contract' => array(
            'className' => 'FileContract'
        ),
        'Memo' => array(
            'className' => 'FileMemo'
        ),
        'Personalrequirement' => array(
            'className' => 'FilePersonalrequirement'
        ),
        'Document' => array(
            'className' => 'FileDocument'
        )
    );

    public $validate = array(
        'name' => array(
            'rule' => array('custom', '/[^\pL\d]+/u'), // Regex to allow alphanumeric and internal spaces
            'allowEmpty' => false
        ),
        'paternal_surname' => array(
		    'rule' => 'alphaNumeric',
            'allowEmpty' => false
		),
		'maternal_surname' => array(
			'rule' => 'alphaNumeric',
            'allowEmpty' => false
		),
        'code' => array(
            'rule' => 'alphaNumeric'
        ),
		'born_date' => array(
			'rule' => 'date',
            'allowEmpty' => false
		),
        'born_country' => array(
            'rule' => array('custom', '/[^\pL\d]+/u')
        ),
        'born_city' => array(
            'rule' => array('custom', '/[^\pL\d]+/u')
        ),
        'ci' => array(
            'rule' => array('minLength', '5'),
            'message' => 'Este campo debe de tener al menos 5 caracteres',
            'allowEmpty' => false
        ),
        'gender' => array(
            'rule' => 'alphaNumeric',
            'allowEmpty' => false
        ),
        'profile' => array(
            'rule' => array('custom', '/[^\pL\d]+/u'),
            'allowEmpty' => false
        ),
        'professional_degree' => array(
            'rule' => 'alphaNumeric'
        ),
        'address' => array(
            'rule' => array('custom', '/[^\pL\d]+/u'),
            'allowEmpty' => true
        ),
        'phone' => array(
            'rule' => array('minLength', '7'),
            'message' => 'Este campo debe de tener al menos 7 caracteres',
            'allowEmpty' => true
        )
	);

    public function listOrderByDate($limit = 0, $order = 'DESC')
    {
        $params = array(
            'order' => array('Employee.registred_datetime ' . $order),
            'limit' => $limit
        );
        return $this->find('all', $params);
    }

    public function getDailyBirthdays()
    {
        $params = array(
            'conditions' => array('Employee.born_date LIKE' => '%-'. date('m-d')),
            'order' => array('Employee.paternal_surname, Employee.maternal_surname, Employee.name')
        );
        return $this->find('all', $params);
    }

    public function notHired()
    {
        $aux = $this->query("SELECT e.id
                              FROM dbo.file_employees e
                              EXCEPT
                              SELECT c.employee_id
                              FROM dbo.file_contracts c
                              WHERE c.end_date >= '" . date('Y-m-d') . "'");

        $idNotHired = array();
        foreach($aux as $id)
        {
            array_push($idNotHired, $id[0]['id']);
        }

        $params = array(
            'conditions' => array('Employee.id' => $idNotHired),
            'order' => array('Employee.paternal_surname, Employee.maternal_surname, Employee.name')
        );
        return $this->find('all', $params);
    }

    public function search($name, $lastName, $code, $ci, $gender, $profile, $degree, $certificate)
    {
        $conditions = array();

        if(!empty($name))
            $conditions['name LIKE '] = "%$name%";
        if(!empty($lastName)) {
            $conditions['OR'] = array(
                'paternal_surname LIKE ' => "%$lastName%",
                'maternal_surname LIKE ' => "%$lastName%"
            );
        }
        if(!empty($code))
            $conditions['code LIKE '] = "%$code%";
        if(!empty($ci))
            $conditions['ci'] = "%$ci%";
        if(!empty($gender))
            $conditions['gender'] = $gender;
        if(!empty($profile))
            $conditions['profile'] = $profile;
        if(!empty($degree))
            $conditions['professional_degree'] = $degree;

        $joinCertificates = array();

        if(!empty($certificate))
        {
            $aux = array(
                'table' => 'file_certificates',
                'alias' => 'Certificate',
                'type' => 'INNER',
                'conditions' => array(
                    'Certificate.employee_id = Employee.id',
                    'Certificate.provision' => $certificate
                )
            );

            array_push($joinCertificates, $aux);
        }

        $params = array(
            'fields' => array('DISTINCT Employee.id',
                'Employee.paternal_surname',
                'Employee.maternal_surname',
                'Employee.name',
                'Employee.code',
                'Employee.ci',
                'Employee.gender',
                'Employee.profile',
                'Employee.professional_degree'
            ),
            'conditions' => $conditions,
            'joins' => $joinCertificates,
            'order' => array('Employee.paternal_surname, Employee.maternal_surname, Employee.name')
        );
        return $this->find('all', $params);
    }
}