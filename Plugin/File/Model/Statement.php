<?php

App::uses('FileAppModel',  'File.Model');

class Statement extends FileAppModel
{
	public $validate = array(
			'name' => array(
				'rule' => 'alphaNumeric',
				'required' => false
			),
			'description' => array(
				'rule' => 'alphaNumeric',
				'required' => false
			)
	);
}