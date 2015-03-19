<?php

App::uses('FileAppModel',  'File.Model');

class Personalrequirement extends FileAppModel
{
    public $belongsTo = array(
        'Employee' => array(
            'className' => 'FileEmployee',
            'foreignKey' => 'employee_id'
        ));

    public $validate = array(
        'expedition_date' => array(
            'rule' => 'date',
            'allowEmpty' => true
        ),
        'code' => array(
            'rule' => array('custom', '/[\pL\d]+/u'),
            'allowEmpty' => false
        ),
        'area' => array(
            'rule' => array('custom', '/[\pL\d]+/u'),
            'allowEmpty' => true
        ),
        'unit' => array(
            'rule' => array('custom', '/[\pL\d]+/u'),
            'allowEmpty' => true
        ),
        'job' => array(
            'rule' => array('custom', '/[\pL\d]+/u'),
            'allowEmpty' => true
        ),
        'from_date' => array(
            'rule' => 'date',
            'allowEmpty' => true
        ),
        'to_date' => array(
            'rule' => 'date',
            'allowEmpty' => true
        ),
        'reason' => array(
            'rule' => array('custom', '/[\pL\d]+/u'),
            'allowEmpty' => true
        ),
        'supersede' => array(
            'rule' => array('custom', '/[\pL\d]+/u'),
            'allowEmpty' => true
        ),
        'comments' => array(
            'rule' => array('custom', '/[\pL\d]+/u'),
            'allowEmpty' => true
        ),
        'petitioner' => array(
            'rule' => array('custom', '/[\pL\d]+/u'),
            'allowEmpty' => true
        ),
        'petition_date' => array(
            'rule' => 'date',
            'allowEmpty' => true
        ),
        'report' => array(
            'rule' => array('custom', '/[\pL\d]+/u'),
            'allowEmpty' => true
        ),
        'report_date' => array(
            'rule' => 'date',
            'allowEmpty' => true
        ),
        'approved_by' => array(
            'rule' => array('custom', '/[\pL\d]+/u'),
            'allowEmpty' => true
        )
    );

    public function findByEmployee($employeeId)
    {
        $conditions = array('Personalrequirement.employee_id' => $employeeId);

        $params = array(
            'conditions' => $conditions,
            'order' => array('Personalrequirement.expedition_date DESC')
        );
        return $this->find('all', $params);
    }

    public function findByEmployeeAndTag($employeeId, $tag, $documentType)
    {
        $conditions = array(
            'Personalrequirement.employee_id' => $employeeId
        );

        $params = array(
            'conditions' => $conditions,
            'order' => array('Personalrequirement.expedition_date DESC'),
            'joins' => array(
                array(
                    'table' => 'file_document_tags',
                    'alias' => 'DocumentTag',
                    'type' => 'INNER',
                    'conditions' => array(
                        'DocumentTag.tag' => $tag,
                        'DocumentTag.document_id = Personalrequirement.id',
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
            'conditions' => array('Personalrequirement.employee_id' => $employeeId),
            //'fields' => array('MAX(Document.digital_file) AS lastFileName'),
            'order' => array('Personalrequirement.digital_file DESC')
        );
        $maxFile = $this->find('first', $params);
        $fileArray = explode('.', $maxFile['Personalrequirement']['digital_file']);

        if(count($fileArray) > 1)
            return ($fileArray[0] + 1) . '.' . $fileArray[1];
        else
            return ($fileArray[0] + 1) . $this->FILE_EXTENSION;
    }
}