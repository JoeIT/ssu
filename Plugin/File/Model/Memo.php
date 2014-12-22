<?php

App::uses('FileAppModel',  'File.Model');

class Memo extends FileAppModel
{
    public $belongsTo = array(
        'Employee' => array(
            'className' => 'FileEmployee',
            'foreignKey' => 'employee_id'
        ));

    public $validate = array(
        'type' => array(
            //'rule' => array('custom', '/([\w.-]+ )+[\w+.-]/'),
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'), // Regex to allow alphanumeric and internal spaces
            'allowEmpty' => false
        ),
        'expedition_date' => array(
            'rule' => 'date',
            'allowEmpty' => false
        ),
        'description' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        ),
        'content' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        )
    );

    public function findByEmployee($employeeId)
    {
        return $this->query("SELECT * FROM file_memos WHERE employee_id = '$employeeId' ORDER BY expedition_date", false);
    }
}