<?php

App::uses('FileAppModel',  'File.Model');

class DocumentTag extends FileAppModel
{
    public $belongsTo = array(
        'Tag' => array(
            'className' => 'FileTag',
            'foreignKey' => 'tag_id'
        )
    );

    public function deleteByDocId($docId)
    {
        return $this->query("DELETE FROM file_document_tags WHERE document_id = '$docId'", false);
    }

    public function getByDocId($docId)
    {
        return $this->query("SELECT * FROM file_document_tags WHERE document_id = '$docId'", false);
    }
}