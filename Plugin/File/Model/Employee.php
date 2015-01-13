<?php

App::uses('FileAppModel',  'File.Model');

class Employee extends FileAppModel
{
    public $hasMany = array(
        'Record' => array(
            'className' => 'FileRecord'
        ),
        'Certificate' => array(
            'className' => 'FileCertificate'
        ),


        'Job' => array(
            'className' => 'FileJob'
        ),
        'Statement' => array(
            'className' => 'FileStatement'
        ),
        'Vacation' => array(
            'className' => 'FileVacation'
        ),
        'Memo' => array(
            'className' => 'FileMemo'
        )
    );

    public $validate = array(
        'name' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'), // Regex to allow alphanumeric and internal spaces
            'allowEmpty' => false
        ),
        'paternal_surname' => array(
		    'rule' => 'alphaNumeric'
		),
		'maternal_surname' => array(
			'rule' => 'alphaNumeric'
		),
		'born_date' => array(
			'rule' => 'date',
            'allowEmpty' => false
		),
        'born_country' => array(
            'rule' => 'alphaNumeric'
        ),
        'born_city' => array(
            'rule' => 'alphaNumeric'
        ),
        'ci' => array(
            'rule' => array('minLength' => '5')
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
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i')
        ),
        'phone' => array(
            'rule' => array('minLength' => '8')
        )
	);
}