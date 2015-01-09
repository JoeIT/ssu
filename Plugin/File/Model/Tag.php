<?php

App::uses('FileAppModel',  'File.Model');

class Tag extends FileAppModel
{
    public $hasMany = array(
        'DocumentTag' => array(
            'className' => 'FileDocumentTag'
        )
    );
}