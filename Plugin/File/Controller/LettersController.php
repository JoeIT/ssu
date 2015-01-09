<?php

App::uses('FileAppController',  'File.Controller');

class LettersController extends FileAppController
{
    public $helpers = array('Html', 'Form');
    private $_classTag = 'letter';

    public function index()
    {
        $this->layout = false;
        $tag = $this->request->data('documentTag');

        //print_r($this->Letter->findByEmployeeAndTag($this->Session->read('currentEmployeeID'), $tag, $this->_classTag));

        $this->set('lettersList',
            $this->Letter->findByEmployeeAndTag($this->Session->read('currentEmployeeID'), $tag, $this->_classTag)
        );
        $this->set(compact('tag'));
    }

    // This is an ajax action
    public function add($id = null)
    {
        $this->layout = false;

        if($id != null)
            $letter = $this->Letter->findById($id);

        $this->set('saved', false);

        if($this->request->is(array('post', 'put')))
        {
            if($id != null)
                $this->Letter->id = $id;
            else
                $this->Letter->create();

            $this->request->data['Letter']['employee_id'] = $this->Session->read('currentEmployeeID');

            if($this->Letter->validates())
            {
                if($this->Letter->save($this->request->data))
                {
                    $this->loadModel('File.DocumentTag');
                    // Deleting all document tags
                    $this->DocumentTag->deleteByDocId($this->Letter->id);

                    // Saving document tags
                    foreach($this->request->data['Letter']['tags'] as $tag)
                    {
                        $this->DocumentTag->create();
                        $data = array('DocumentTag' => array(
                            'document_id' => $this->Letter->id,
                            'tag' => $tag,
                            'document_type' => $this->_classTag
                        ));

                        $this->DocumentTag->save($data);
                    }
                    $this->set('saved', true);
                }
                else
                    $this->set('errorMessage', 'NOTA: Ocurrió un problema al guardar la información!!');
            }
        }

        if (!$this->request->data['Letter'])
            $this->request->data  = $letter;
    }

    // This is an ajax action
    public function delete($id = null)
    {
        $this->layout = false;

        $letter = $this->Letter->findById($id);

        $this->set(compact('letter'));
        $this->set('deleted', false);

        $this->loadModel('File.DocumentTag');

        $tagsBelong = $this->DocumentTag->getByDocId( $id );

        if( count($tagsBelong) > 0 )
            echo 'Este documento esta relacionado con los siguientes tags:';

        foreach($tagsBelong as $tag)
        {
            echo '</br>- ' . $this->GLOBAL_TAGS[ $tag['0']['tag'] ];
        }

        if( $this->request->is(array('post')) )
        {
            if( $this->Letter->delete($id) )
            {
                // Deleting all document tags
                $this->DocumentTag->deleteByDocId($id);
                $this->set('deleted', true);
            }
            else
                $this->set('errorMessage', 'NOTA: Ocurrió un problema al borrar la información!!');
        }
    }
}