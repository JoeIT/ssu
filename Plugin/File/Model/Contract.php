<?php

App::uses('FileAppModel',  'File.Model');

class Contract extends FileAppModel
{
    public $belongsTo = array(
        'Employee' => array(
            'className' => 'FileEmployee',
            'foreignKey' => 'employee_id'
        ));

    public $validate = array(
        'number' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'), // Regex to allow alphanumeric and internal spaces
            'allowEmpty' => false
        ),
        'start_date' => array(
            'rule' => 'date',
            'allowEmpty' => false
        ),
        'end_date' => array(
            'rule' => 'date',
            'allowEmpty' => false
        ),
        'job' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'), // Regex to allow alphanumeric and internal spaces
            'allowEmpty' => false
        ),
        'time' => array(
            'rule' => 'alphaNumeric',
            'allowEmpty' => false
        ),
        'salary' => array(
            //'rule' => 'numeric',
            'rule' => array('money', 'left'),
            'message' => 'Este campo no debe estar vacio o ser negativo',
            'allowEmpty' => false
        ),
        'term' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        ),
        'representant' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        ),
        'legal_adviser' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        ),
        'description' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        )
    );

    public function findByEmployee($employeeId)
    {
        $conditions = array('Contract.employee_id' => $employeeId);

        $params = array(
            'conditions' => $conditions,
            'order' => array('Contract.start_date DESC')            
        );
        return $this->find('all', $params);
    }
	
	public function findByEmployeeAndTag($employeeId, $tag, $documentType)
    {
        $conditions = array(
            'Contract.employee_id' => $employeeId
        );

        $params = array(
            'conditions' => $conditions,
            'order' => array('Contract.start_date DESC'),
            'joins' => array(
                array(
                    'table' => 'file_document_tags',
                    'alias' => 'DocumentTag',
                    'type' => 'INNER',
                    'conditions' => array(
                        'DocumentTag.tag' => $tag,
                        'DocumentTag.document_id = Contract.id',
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
            'conditions' => array('Contract.employee_id' => $employeeId),
            //'fields' => array('MAX(Document.digital_file) AS lastFileName'),
            'order' => array('Contract.digital_file DESC')
        );
        $maxFile = $this->find('first', $params);
        $fileArray = explode('.', $maxFile['Contract']['digital_file']);

        if(count($fileArray) > 1)
            return ($fileArray[0] + 1) . '.' . $fileArray[1];
        else
            return ($fileArray[0] + 1) . $this->FILE_EXTENSION;
    }
}