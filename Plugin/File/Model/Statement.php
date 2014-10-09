<?php

App::uses('FileAppModel',  'File.Model');

class Statement extends FileAppModel
{
	public $validate = array(
			'name' => array(
				'rule' => 'alphaNumeric',
				'required' => true
			),
			'description' => array(
				'rule' => 'alphaNumeric',
				'required' => false,
                'allowEmpty' => true
			)
	);
}