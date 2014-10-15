<?php

App::uses('FileAppModel',  'File.Model');

class Statement extends FileAppModel
{
	public $validate = array(
			'name' => array(
                //'rule' => array('custom', '/([\w.-]+ )+[\w+.-]/'),
                'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'), // Regex to allow alphanumeric and internal spaces
				'required' => true,
                'allowEmpty' => false
			),
			'description' => array(
				'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
                'allowEmpty' => true
			)
	);
}