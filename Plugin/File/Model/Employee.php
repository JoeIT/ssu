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
        'Memo' => array(
            'className' => 'FileMemo'
        ),
        'PersonalRequirement' => array(
            'className' => 'FilePersonalRequirement'
        ),
        'Document' => array(
            'className' => 'FileDocument'
        ),


        'Statement' => array(
            'className' => 'FileStatement'
        ),
        'Vacation' => array(
            'className' => 'FileVacation'
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

    public function listOrderByDate()
    {
        $params = array(
            'order' => array('Employee.registred_datetime DESC')
        );
        return $this->find('all', $params);
    }
}