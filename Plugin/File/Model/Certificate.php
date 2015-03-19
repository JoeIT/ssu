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
            'rule' => array('custom', '/[\pL\d]+/u'), // Regex to allow alphanumeric and internal spaces
            'allowEmpty' => false
        ),
        'expedition_date' => array(
            'rule' => 'date',
            'allowEmpty' => false
        ),
        'location' => array(
            'rule' => array('custom', '/[\pL\d]+/u'),
            'allowEmpty' => true
        ),
        'institution' => array(
            'rule' => array('custom', '/[\pL\d]+/u'),
            'allowEmpty' => false
        ),
        'description' => array(
            'rule' => array('custom', '/[\pL\d]+/u'),
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

    public function nextFileNameAvailable($employeeId)
    {
        $params = array(
            'conditions' => array('Certificate.employee_id' => $employeeId),
            //'fields' => array('MAX(Document.digital_file) AS lastFileName'),
            'order' => array('Certificate.digital_file DESC')
        );
        $maxFile = $this->find('first', $params);
        $fileArray = explode('.', $maxFile['Certificate']['digital_file']);

        if(count($fileArray) > 1)
            return ($fileArray[0] + 1) . '.' . $fileArray[1];
        else
            return ($fileArray[0] + 1) . $this->FILE_EXTENSION;
    }
}