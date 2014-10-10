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
			)
	);
}