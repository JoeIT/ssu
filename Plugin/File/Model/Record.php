<?php

App::uses('FileAppModel',  'File.Model');

class Record extends FileAppModel
{
    public $belongsTo = array(
        'Employee' => array(
            'className' => 'FileEmployee',
            'foreignKey' => 'employee_id'
        ));

    public $validate = array(
        'name' => array(
            //'rule' => array('custom', '/([\w.-]+ )+[\w+.-]/'),
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'), // Regex to allow alphanumeric and internal spaces
            'allowEmpty' => false
        ),
        'description' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        )
    );

    public function findByEmployee($employeeId)
    {
        return $this->query("SELECT * FROM file_records WHERE employee_id = '$employeeId'", false);
    }
}