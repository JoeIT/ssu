<?php

App::uses('FileAppModel',  'File.Model');

class Letter extends FileAppModel
{
    var $_findMethods = array(
        /*'all' => true,
        'first' => true,
        'count' => true,
        'neighbors' => true,
        'list' => true,*/
        'threaded' => true
    );

    public $belongsTo = array(
        'Employee' => array(
            'className' => 'FileEmployee',
            'foreignKey' => 'employee_id'
        )
    );

    public $validate = array(
        'date' => array(
            'rule' => 'date',
            'allowEmpty' => false
        ),
        'subject' => array(
            //'rule' => array('custom', '/([\w.-]+ )+[\w+.-]/'),
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'), // Regex to allow alphanumeric and internal spaces
            'allowEmpty' => false
        ),
        'addressee' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => false
        ),
        'contents' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        ),
        'digital_file' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        )
    );

    public function findByEmployee($employeeId)
    {
        //return $this->query("SELECT * FROM file_letters WHERE employee_id = '$employeeId'", false);

        $conditions = array('Letter.employee_id' => '1');

        $params = array(
            'conditions' => $conditions,
            'order' => array('Letter.date')
            /*
            'recursive' => 1, //int
            // Array of field names
            'fields' => array('Model.field1', 'DISTINCT Model.field2'),
            // String or array defining order
            'order' => array('Model.created', 'Model.field3 DESC'),
            'group' => array('Model.field'), //fields to GROUP BY
            'limit' => n, //int
            'page' => n, //int
            'offset' => n, //int
            'callbacks' => true //Other possible values are false, 'before', 'after'
            */
        );
        return $this->find('all', $params);
    }

    public function findByEmployeeAndTag($employeeId, $tag, $documentType)
    {
        $conditions = array(
            'Letter.employee_id' => $employeeId
        );

        $params = array(
            'conditions' => $conditions,
            'order' => array('Letter.date'),
            'joins' => array(
                array(
                    'table' => 'file_document_tags',
                    'alias' => 'DocumentTag',
                    'type' => 'INNER',
                    'conditions' => array(
                        'DocumentTag.tag' => $tag,
                        'DocumentTag.document_id = Letter.id',
                        'DocumentTag.document_type' => $documentType
                    )
                )
            )
        );
        return $this->find('all', $params);
        //return $this->find('threaded');
    }
}