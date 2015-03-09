<?php

App::uses('FileAppController',  'File.Controller');

class ContractsController extends FileAppController
{
    public $helpers = array('Html', 'Form');
	private $_classType = 'contract';

    public function index()
    {
        $this->layout = false;
        
		$tag = $this->request->data('documentTag');

        $this->set('contractsList', $this->Contract->findByEmployeeAndTag(
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
            $contract = $this->Contract->findById($id);

        $this->set('saved', false);
		$this->set('GLOBAL_TAGS', $this->GLOBAL_TAGS);
		$this->set('CONTRACT_TIME', $this->CONTRACT_TIME);
		$this->set('CONTRACT_TERMS', $this->CONTRACT_TERMS);

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
                $this->Contract->id = $id;
            else
                $this->Contract->create();

            $this->request->data['Contract']['employee_id'] = $this->Session->read('currentEmployeeID');
            $fileName = $contract['Contract']['digital_file'];
            if(empty($fileName))
                $fileName = $this->Contract->nextFileNameAvailable($this->Session->read('currentEmployeeID'));
            $this->request->data['Contract']['digital_file'] = $fileName;

            $this->Contract->set($this->request->data);
            if($this->Contract->validates())
            {
                if($this->Contract->save($this->request->data))
				{
					// Deleting all document tags
                    $this->DocumentTag->deleteByDocIdAndType($this->Contract->id, $this->_classType);

                    // Saving document tags
                    foreach($this->request->data['Contract']['tags'] as $tag)
                    {
                        $this->DocumentTag->create();
                        $data = array('DocumentTag' => array(
                            'document_id' => $this->Contract->id,
                            'tag' => $tag,
                            'document_type' => $this->_classType
                        ));

                        $this->DocumentTag->save($data);
                    }

                    $employee = $this->Employee->findById($this->Session->read('currentEmployeeID'));
                    $folderDocType = 'CONTRACTS';

                    //- Guardar archivo en directorio con nombres -> codigo de empleado -> document_type
                    $this->request->data['Contract']['digital_file'] = $employee['Employee']['code'] . DS . $folderDocType . DS . $fileName;
                    $folder_url = $this->DIGITAL_DOCS_PATH . DS . $employee['Employee']['code'] . DS . $folderDocType;
                    $dir = new Folder($folder_url, true);

                    $physicalFile = fopen($folder_url . DS . $fileName, 'w');
                    fwrite($physicalFile, base64_decode($this->request->data['Contract']['file_base64']));
                    fclose( $physicalFile );

                    $this->set('saved', true);
				}
                else
                    $this->set('errorMessage', 'NOTA: Ocurrió un problema al guardar la información!!');
            }
            else
            {
                foreach( $this->request->data['Contract']['tags'] as $tag )
                {
                    array_push($selected, $tag);
                }
                $this->set('selected', $selected);
            }
        }

        if (!$this->request->data['Contract'])
            $this->request->data  = $contract;
    }

    // This is an ajax action
    public function delete($id = null)
    {
        $this->layout = false;

        $contract = $this->Contract->findById($id);

        $this->set(compact($this->_classType));
        $this->set('deleted', false);

        $this->set('CONTRACT_TIME', $this->CONTRACT_TIME);
        $this->set('CONTRACT_TERMS', $this->CONTRACT_TERMS);
		
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
            if($this->Contract->delete($id))
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