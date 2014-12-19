<?php

App::uses('FileAppModel',  'File.Model');

class PersonalEducation extends FileAppModel
{
    public $belongsTo = array(
        'Employee' => array(
            'className' => 'FileEmployee',
            'foreignKey' => 'employee_id'
        ));

    public $validate = array(
        'titulation_grade' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'), // Regex to allow alphanumeric and internal spaces
            'allowEmpty' => false
        ),
        'expedition_date' => array(
            'rule' => 'date',
            'allowEmpty' => false
        ),
        'location' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        ),
        'institution' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => false
        ),
        'description' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        )
    );

    public function findByEmployee($employeeId)
    {
        return $this->query("SELECT * FROM file_personal_educations WHERE employee_id = '$employeeId'", false);
    }
}