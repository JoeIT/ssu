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

    public function getByDocIdAndType($docId, $type)
    {
        return $this->query("SELECT * FROM file_document_tags WHERE document_id = '$docId' AND document_type = '$type'", false);
    }

    public function deleteByDocIdAndType($docId, $type)
    {
        return $this->query("DELETE FROM file_document_tags WHERE document_id = '$docId' AND document_type = '$type'", false);
    }
}