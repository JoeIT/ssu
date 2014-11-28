<?php

App::uses('FileAppModel',  'File.Model');

class Employee extends FileAppModel
{
    public $validate = array(
        'name' => array(
            'rule' => 'alphaNumeric'
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
            'rule' => 'alphaNumeric'
        ),
        'address' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i')
        ),
        'phone' => array(
            'rule' => array('minLength' => '8')
        )
	);
}