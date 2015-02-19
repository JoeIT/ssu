<?php

App::uses('FileAppController',  'File.Controller');

class DocumentsController extends FileAppController
{
    public $helpers = array('Html', 'Form');
    private $_classType = 'document';

    public function index()
    {
        $this->layout = false;

        $this->set('documentsList', $this->Document->findByEmployeeAndTag(
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
            $document = $this->Document->findById($id);

        $this->set('saved', false);
        $this->set('GLOBAL_TAGS', $this->GLOBAL_TAGS);

        $selected = array();
        if($id != null)
        {
            $docTags = $this->DocumentTag->getByDocIdAndType($id, 'document');
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
                $this->Document->id = $id;
            else
                $this->Document->create();

            $this->request->data['Document']['employee_id'] = $this->Session->read('currentEmployeeID');
            //print_r($this->request->data['Document']);

            //$base_64 = $this->request->data['Document']['file_base64'];
            //$f = finfo_open();
            //echo '<br/>Size: ' . finfo_buffer($f, $base_64, FILEINFO_MIME_TYPE);

            //- Comprobar q la extension del archivo sea la permitida
            //- Comprobar que el tamaño del archivo sea el correcto

            $this->Document->set( $this->request->data['Document'] );
            if($this->Document->validates())
            {
                $codEmployee = 'abc-123';
                $fileName = 'nombre_file.pdf';
                $folderDocType = 'DOCS';

                //- Guardar archivo en directorio con nombres -> codigo de empleado -> document_type
                $this->request->data['Document']['digital_file'] = $codEmployee . DS . $folderDocType . DS . $fileName;
                $folder_url = $this->DIGITAL_DOCS_PATH . DS . $codEmployee . DS . $folderDocType;
                $dir = new Folder($folder_url, true);

                $physicalFile = fopen($folder_url . DS . $fileName, 'w');
                fwrite($physicalFile, base64_decode($this->request->data['Document']['file_base64']));
                fclose( $physicalFile );

                /*
                if($this->Document->save($this->request->data))
                {
                    // Deleting all document tags
                    $this->DocumentTag->deleteByDocIdAndType($this->Document->id, $this->_classType);

                    // Saving document tags
                    foreach($this->request->data['Document']['tags'] as $tag)
                    {
                        $this->DocumentTag->create();
                        $data = array('DocumentTag' => array(
                            'document_id' => $this->Document->id,
                            'tag' => $tag,
                            'document_type' => $this->_classType
                        ));

                        $this->DocumentTag->save($data);
                    }

                    //$this->Session->setFlash('Carta guardada!!');
                    $this->set('saved', true);
                }
                else
                    $this->set('errorMessage', 'NOTA: Ocurrió un problema al guardar la información!!');
                */
            }
            else
            {
                foreach( $this->request->data['Document']['tags'] as $tag )
                {
                    array_push($selected, $tag);
                }

                $this->set('selected', $selected);
            }
        }

        if (!$this->request->data['Document'])
            $this->request->data  = $document;
    }

    // This is an ajax action
    public function delete($id = null)
    {
        $this->layout = false;

        $document = $this->Document->findById($id);

        $this->set(compact('document'));
        $this->set('deleted', false);

        $this->loadModel('File.DocumentTag');

        $tagsBelong = $this->DocumentTag->getByDocIdAndType($id, $this->_classType);

        if( count($tagsBelong) > 1 ) {
            echo 'Este documento esta relacionado con los siguientes tags:';
            foreach ($tagsBelong as $tag)
            {
                echo '</br>- ' . $this->GLOBAL_TAGS[$tag['0']['tag']];
            }
            echo '</br></br>';
        }

        if( $this->request->is(array('post')) )
        {
            if( $this->Document->delete($id) )
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