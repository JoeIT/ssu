<?php
App::uses('FileAppController', 'File.Controller');

class MemosController extends FileAppController
{
	public $helpers = array('Html', 'Form');
	private $_classType = 'memo';
	
    public function index()
    {
        $this->layout = false;
		
		$this->set('memosList', $this->Memo->findByEmployeeAndTag(
			$this->Session->read('currentEmployeeID'),
			$this->request->data('documentTag'),
			$this->_classType)
		);
    }

    // This is an ajax action
    public function add($id = null)
    {
        $this->layout = false;
        $this->loadModel('File.DocumentTag');

        if($id != null)
            $memo = $this->Memo->findById($id);

        $this->set('saved', false);
		$this->set('GLOBAL_TAGS', $this->GLOBAL_TAGS);

        $selected = array();
        if($id != null)
        {
            $docTags = $this->DocumentTag->getByDocIdAndType($id, $this->_classType);
            foreach($docTags as $dt)
            {
                // Load on $selected array the document tags
                array_push($selected, $dt[0]['tag']);
            }
        }
        $this->set('selected', $selected);

        if($this->request->is(array('post', 'put')))
        {
            if($id != null)
                $this->Memo->id = $id;
            else
                $this->Memo->create();

            $this->request->data['Memo']['employee_id'] = $this->Session->read('currentEmployeeID');

            $this->Memo->set($this->request->data);
            if($this->Memo->validates())
            {
                if($this->Memo->save($this->request->data))
                {
                    // Deleting all document tags
                    $this->DocumentTag->deleteByDocIdAndType($this->Memo->id, $this->_classType);

                    // Saving document tags
                    foreach($this->request->data['Memo']['tags'] as $tag)
                    {
                        $this->DocumentTag->create();
                        $data = array('DocumentTag' => array(
                            'document_id' => $this->Memo->id,
                            'tag' => $tag,
                            'document_type' => $this->_classType
                        ));

                        $this->DocumentTag->save($data);
                    }
                    $this->set('saved', true);
                }
                else
                    $this->set('errorMessage', 'NOTA: Ocurrió un problema al guardar la información!!');
            }
            else
            {
                foreach( $this->request->data['Memo']['tags'] as $tag )
                {
                    array_push($selected, $tag);
                }
                $this->set('selected', $selected);
            }
        }

        if (!$this->request->data['Memo'])
            $this->request->data  = $memo;
    }

    // This is an ajax action
    public function delete($id = null)
    {
        $this->layout = false;

        $memo = $this->Memo->findById($id);

        $this->set(compact($this->_classType));
        $this->set('deleted', false);

        $this->loadModel('File.DocumentTag');

        $tagsBelong = $this->DocumentTag->getByDocIdAndType($id, $this->_classType);

        if( count($tagsBelong) > 1 )
        {
            echo 'Este documento esta relacionado con los siguientes tags:';
            foreach ($tagsBelong as $tag) {
                echo '</br>- ' . $this->GLOBAL_TAGS[$tag['0']['tag']];
            }
            echo '</br></br>';
        }

        if($this->request->is(array('post')))
        {
            if($this->Memo->delete($id))
            {
                // Deleting all document tags
                $this->DocumentTag->deleteByDocIdAndType($id, $this->_classType);
                $this->set('deleted', true);
            }
            else
                $this->set('errorMessage', 'NOTA: Ocurrió un problema al borrar la información!!');
        }
    }
}