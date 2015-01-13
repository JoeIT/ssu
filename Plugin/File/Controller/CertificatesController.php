<?php

App::uses('FileAppController',  'File.Controller');

class CertificatesController extends FileAppController
{
    public $helpers = array('Html', 'Form');
	private $_classType = 'certificate';

    public function index()
    {
        $this->layout = false;
        
		$tag = $this->request->data('documentTag');

        $this->set('certificatesList',
            $this->Certificate->findByEmployeeAndTag($this->Session->read('currentEmployeeID'), $tag, $this->_classType)
        );
    }

    // This is an ajax action
    public function add($id = null)
    {
        $this->layout = false;
		$this->loadModel('File.DocumentTag');

        if($id != null)
            $certificate = $this->Certificate->findById($id);

        $this->set('saved', false);
		$this->set('GLOBAL_TAGS', $this->GLOBAL_TAGS);

        $selected = array();
        if($id != null)
        {
            $docTags = $this->DocumentTag->getByDocId($id);
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
                $this->Certificate->id = $id;
            else
                $this->Certificate->create();

            $this->request->data['Certificate']['employee_id'] = $this->Session->read('currentEmployeeID');            

            if($this->Certificate->validates())
            {
                if($this->Certificate->save($this->request->data))
				{
					// Deleting all document tags
                    $this->DocumentTag->deleteByDocIdAndType($this->Certificate->id, $this->_classType);

                    // Saving document tags
                    foreach($this->request->data['Certificate']['tags'] as $tag)
                    {
                        $this->DocumentTag->create();
                        $data = array('DocumentTag' => array(
                            'document_id' => $this->Certificate->id,
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
        }

        if (!$this->request->data['Certificate'])
            $this->request->data  = $certificate;
    }

    // This is an ajax action
    public function delete($id = null)
    {
        $this->layout = false;

        $certificate = $this->Certificate->findById($id);

        $this->set(compact('certificate'));
        $this->set('deleted', false);
		
		$this->loadModel('File.DocumentTag');

        $tagsBelong = $this->DocumentTag->getByDocIdAndType($id, $this->_classType);

        if( count($tagsBelong) > 0 )
            echo 'Este documento esta relacionado con los siguientes tags:';

        foreach($tagsBelong as $tag)
        {
            echo '</br>- ' . $this->GLOBAL_TAGS[$tag['0']['tag']];
        }

        if($this->request->is(array('post')))
        {
            if($this->Certificate->delete($id))
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