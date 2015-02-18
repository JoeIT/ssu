<?php

App::uses('FileAppModel',  'File.Model');

class Document extends FileAppModel
{
    var $_findMethods = array(
        'threaded' => true
    );

    public $belongsTo = array(
        'Employee' => array(
            'className' => 'FileEmployee',
            'foreignKey' => 'employee_id'
        )
    );

    public $validate = array(
        'name' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => false
        ),
        'description' => array(
            'rule' => array('custom', '/^[a-z0-9 .\-]+$/i'),
            'allowEmpty' => true
        ),
        'digital_file' => array(
            'uploadError' => array(
                'rule' => 'uploadError',
                'message' => 'Hubo un problema al subir el archivo.',
                'required' => FALSE,
                'allowEmpty' => TRUE,
            ),
            'mimeType' => array(
                //'rule' => array('mimeType', array('image/gif','image/png','image/jpg','image/jpeg')),
                'rule' => array('mimeType', array('image/gif','image/png','image/jpg','image/jpeg')),
                'message' => 'Archivo no permitido.',
                'required' => FALSE,
                'allowEmpty' => TRUE,
            ),
            'processUpload' => array(
                'rule' => 'processUpload',
                'message' => 'Hubo un problema al procesar el archivo.',
                'required' => FALSE,
                'allowEmpty' => TRUE,
                'last' => TRUE,
            )
        )
    );

    public function findByEmployee($employeeId)
    {
        $conditions = array('Document.employee_id' => $employeeId);

        $params = array(
            'conditions' => $conditions,
            'order' => array('Document.name')
        );
        return $this->find('all', $params);
    }

    public function findByEmployeeAndTag($employeeId, $tag, $documentType)
    {
        $conditions = array(
            'Document.employee_id' => $employeeId
        );

        $params = array(
            'conditions' => $conditions,
            'order' => array('Document.name'),
            'joins' => array(
                array(
                    'table' => 'file_document_tags',
                    'alias' => 'DocumentTag',
                    'type' => 'INNER',
                    'conditions' => array(
                        'DocumentTag.tag' => $tag,
                        'DocumentTag.document_id = Document.id',
                        'DocumentTag.document_type' => $documentType
                    )
                )
            )
        );
        return $this->find('all', $params);
    }
}