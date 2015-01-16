<?php

App::uses('FileAppModel',  'File.Model');

class Certificate extends FileAppModel
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
        $conditions = array('Certificate.employee_id' => $employeeId);

        $params = array(
            'conditions' => $conditions,
            'order' => array('Certificate.expedition_date DESC')            
        );
        return $this->find('all', $params);
    }
	
	public function findByEmployeeAndTag($employeeId, $tag, $documentType)
    {
        $conditions = array(
            'Certificate.employee_id' => $employeeId
        );

        $params = array(
            'conditions' => $conditions,
            'order' => array('Certificate.expedition_date DESC'),
            'joins' => array(
                array(
                    'table' => 'file_document_tags',
                    'alias' => 'DocumentTag',
                    'type' => 'INNER',
                    'conditions' => array(
                        'DocumentTag.tag' => $tag,
                        'DocumentTag.document_id = Certificate.id',
                        'DocumentTag.document_type' => $documentType
                    )
                )
            )
        );
        return $this->find('all', $params);
    }
}