<?php
App::uses('FileAppController', 'File.Controller');

class PersonalrequirementsController extends FileAppController
{
	public $helpers = array('Html', 'Form');
	private $_classType = 'personalrequirement';
	
    public function index()
    {
        $this->layout = false;

        $this->set('personalRequirementsList', $this->Personalrequirement->findByEmployeeAndTag(
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
        $this->loadModel('File.Employee');

        if($id != null)
            $personalrequirement = $this->Personalrequirement->findById($id);

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
                $this->Personalrequirement->id = $id;
            else
                $this->Personalrequirement->create();

            $this->request->data['Personalrequirement']['employee_id'] = $this->Session->read('currentEmployeeID');
            $fileName = $personalrequirement['Personalrequirement']['digital_file'];
            if(empty($fileName))
                $fileName = $this->Personalrequirement->nextFileNameAvailable($this->Session->read('currentEmployeeID'));
            $this->request->data['Personalrequirement']['digital_file'] = $fileName;

            //print_r($this->request->data);
            //print_r($this->request->data['Personalrequirement']);
            //print_r($this->Personalrequirement);
            //print_r($personalrequirement);

            $this->Personalrequirement->set($this->request->data);
            if($this->Personalrequirement->validates())
            {
                if($this->Personalrequirement->save($this->request->data))
                {
                    // Deleting all document tags
                    $this->DocumentTag->deleteByDocIdAndType($this->Personalrequirement->id, $this->_classType);

                    // Saving document tags
                    foreach($this->request->data['Personalrequirement']['tags'] as $tag)
                    {
                        $this->DocumentTag->create();
                        $data = array('DocumentTag' => array(
                            'document_id' => $this->Personalrequirement->id,
                            'tag' => $tag,
                            'document_type' => $this->_classType
                        ));

                        $this->DocumentTag->save($data);
                    }

                    $employee = $this->Employee->findById($this->Session->read('currentEmployeeID'));
                    $folderDocType = 'PERSONAL_REQUIREMENTS';

                    //- Guardar archivo en directorio con nombres -> codigo de empleado -> document_type
                    //$this->request->data['Personalrequirement']['digital_file'] = $employee['Employee']['code'] . DS . $folderDocType . DS . $fileName;
                    $folder_url = $this->DIGITAL_DOCS_PATH . DS . $employee['Employee']['code'] . DS . $folderDocType;
                    $dir = new Folder($folder_url, true);

                    $physicalFile = fopen($folder_url . DS . $fileName, 'w');
                    fwrite($physicalFile, base64_decode($this->request->data['Personalrequirement']['file_base64']));
                    fclose( $physicalFile );

                    $this->set('saved', true);
                }
                else
                    $this->set('errorMessage', 'NOTA: Ocurrió un problema al guardar la información!!');
            }
            else
            {
                foreach( $this->request->data['Personalrequirement']['tags'] as $tag )
                {
                    array_push($selected, $tag);
                }
                $this->set('selected', $selected);
            }
        }

        if (!$this->request->data['Personalrequirement'])
            $this->request->data  = $personalrequirement;
    }

    // This is an ajax action
    public function delete($id = null)
    {
        $this->layout = false;

        $personalrequirement = $this->Personalrequirement->findById($id);

        $this->set(compact('personalrequirement'));
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
            if($this->Personalrequirement->delete($id))
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