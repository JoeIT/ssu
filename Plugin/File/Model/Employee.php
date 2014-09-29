<?php

App::uses('FileAppModel',  'File.Model');

class Employee extends FileAppModel
{
	public $validate = array(
			'name' => array(
				'rule' => 'alphaNumeric',
				'required' => false
			),
			'paternal_surname' => array(
				'rule' => 'alphaNumeric',
				'required' => false
			),
			'maternal_surname' => array(
				'rule' => 'alphaNumeric',
				'required' => false
			),
			'born_date' => array(
				'rule' => 'date',
				'required' => true
			)
		);
}