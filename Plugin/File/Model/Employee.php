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
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'), // Regex to allow alphanumeric and internal spaces
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
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i')
        ),
        'born_city' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i')
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
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => false
        ),
        'address' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
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
}