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
        'expedition_date' => array(
            'rule' => 'date',
            'allowEmpty' => false
        ),
        'code' => array(
            'rule' => array('custom', '/^[a-z0-9 \/.-]+$/i'),
            'allowEmpty' => false
        ),
        'description' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        ),
        'content_text' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        )
    );

    public function findByEmployee($employeeId)
    {
        $conditions = array('Memo.employee_id' => $employeeId);

        $params = array(
            'conditions' => $conditions,
            'order' => array('Memo.expedition_date DESC')
        );
        return $this->find('all', $params);
    }

    public function findByEmployeeAndTag($employeeId, $tag, $documentType)
    {
        $conditions = array(
            'Memo.employee_id' => $employeeId
        );

        $params = array(
            'conditions' => $conditions,
            'order' => array('Memo.expedition_date DESC'),
            'joins' => array(
                array(
                    'table' => 'file_document_tags',
                    'alias' => 'DocumentTag',
                    'type' => 'INNER',
                    'conditions' => array(
                        'DocumentTag.tag' => $tag,
                        'DocumentTag.document_id = Memo.id',
                        'DocumentTag.document_type' => $documentType
                    )
                )
            )
        );
        return $this->find('all', $params);
    }
}