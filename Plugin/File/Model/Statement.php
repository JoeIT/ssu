<?php

App::uses('FileAppModel',  'File.Model');

class Statement extends FileAppModel
{
	public $validate = array(
			'name' => array(
                //'rule' => array('custom', '/([\w.-]+ )+[\w+.-]/'),
                'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'), // Regex to allow alphanumeric and internal spaces
				'required' => true
			),
			'description' => array(
				'rule' => 'alphaNumeric',
				'required' => false,
                'allowEmpty' => true
			)
	);
}