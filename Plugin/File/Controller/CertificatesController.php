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
        $this->set('CERTIFICATE_PROVISION', $this->CERTIFICATE_PROVISION);

        $this->set('certificatesList', $this->Certificate->findByEmployeeAndTag(
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
            $certificate = $this->Certificate->findById($id);

        $this->set('saved', false);
		$this->set('GLOBAL_TAGS', $this->GLOBAL_TAGS);
		$this->set('CERTIFICATE_PROVISION', $this->CERTIFICATE_PROVISION);

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
                $this->Certificate->id = $id;
            else
                $this->Certificate->create();

            $this->request->data['Certificate']['employee_id'] = $this->Session->read('currentEmployeeID');
            $fileName = $certificate['Certificate']['digital_file'];
            if(empty($fileName))
                $fileName = $this->Certificate->nextFileNameAvailable($this->Session->read('currentEmployeeID'));
            $this->request->data['Certificate']['digital_file'] = $fileName;

            $this->Certificate->set($this->request->data);
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

                    $employee = $this->Employee->findById($this->Session->read('currentEmployeeID'));
                    $folderDocType = 'CERTIFICATES';

                    //- Guardar archivo en directorio con nombres -> codigo de empleado -> document_type
                    $this->request->data['Certificate']['digital_file'] = $employee['Employee']['code'] . DS . $folderDocType . DS . $fileName;
                    $folder_url = $this->DIGITAL_DOCS_PATH . DS . $employee['Employee']['code'] . DS . $folderDocType;
                    $dir = new Folder($folder_url, true);

                    $physicalFile = fopen($folder_url . DS . $fileName, 'w');
                    fwrite($physicalFile, base64_decode($this->request->data['Certificate']['file_base64']));
                    fclose( $physicalFile );

                    $this->set('saved', true);
				}
                else
                    $this->set('errorMessage', 'NOTA: Ocurrió un problema al guardar la información!!');
            }
            else
            {
                foreach( $this->request->data['Certificate']['tags'] as $tag )
                {
                    array_push($selected, $tag);
                }
                $this->set('selected', $selected);
            }
        }

        if (!$this->request->data['Certificate'])
            $this->request->data  = $certificate;
    }

    // This is an ajax action
    public function delete($id = null)
    {
        $this->layout = false;
        $this->set('CERTIFICATE_PROVISION', $this->CERTIFICATE_PROVISION);

        $certificate = $this->Certificate->findById($id);

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