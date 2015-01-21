<?php

App::uses('FileAppModel',  'File.Model');

class PersonalRequirement extends FileAppModel
{
    public $belongsTo = array(
        'Employee' => array(
            'className' => 'FileEmployee',
            'foreignKey' => 'employee_id'
        ));

    public $validate = array(
        'expedition_date' => array(
            'rule' => 'date',
            'allowEmpty' => false
        ),
        'code' => array(
            'rule' => array('custom', '/^[a-z0-9 \/.-]+$/i'),
            'allowEmpty' => false
        ),
        'area' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        ),
        'unit' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        ),
        'job' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
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
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        ),
        'supersede' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        ),
        'comments' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        ),
        'petitioner' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        ),
        'petition_date' => array(
            'rule' => 'date',
            'allowEmpty' => true
        ),
        'report' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        ),
        'report_date' => array(
            'rule' => 'date',
            'allowEmpty' => true
        ),
        'approved_by' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        )
    );

    public function findByEmployee($employeeId)
    {
        $conditions = array('PersonalRequirement.employee_id' => $employeeId);

        $params = array(
            'conditions' => $conditions,
            'order' => array('PersonalRequirement.expedition_date DESC')
        );
        return $this->find('all', $params);
    }

    public function findByEmployeeAndTag($employeeId, $tag, $documentType)
    {
        $conditions = array(
            'PersonalRequirement.employee_id' => $employeeId
        );

        $params = array(
            'conditions' => $conditions,
            'order' => array('PersonalRequirement.expedition_date DESC'),
            'joins' => array(
                array(
                    'table' => 'file_document_tags',
                    'alias' => 'DocumentTag',
                    'type' => 'INNER',
                    'conditions' => array(
                        'DocumentTag.tag' => $tag,
                        'DocumentTag.document_id = PersonalRequirement.id',
                        'DocumentTag.document_type' => $documentType
                    )
                )
            )
        );
        return $this->find('all', $params);
    }
}