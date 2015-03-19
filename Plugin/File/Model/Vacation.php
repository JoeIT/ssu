<?php

App::uses('FileAppModel',  'File.Model');

class Vacation extends FileAppModel
{
    public $belongsTo = array(
        'Employee' => array(
            'className' => 'FileEmployee',
            'foreignKey' => 'employee_id'
        ));

    public $validate = array(
        'name' => array(
            //'rule' => array('custom', '/([\w.-]+ )+[\w+.-]/'),
            'rule' => array('custom', '/[\pL\d]+/u'), // Regex to allow alphanumeric and internal spaces
            'allowEmpty' => false
        ),
        'description' => array(
            'rule' => array('custom', '/[\pL\d]+/u'),
            'allowEmpty' => true
        )
    );

    public function findByEmployee($employeeId)
    {
        return $this->query("SELECT * FROM file_vacations WHERE employee_id = '$employeeId'", false);
    }
}