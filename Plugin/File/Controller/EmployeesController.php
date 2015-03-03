<?php
App::uses('FileAppController', 'File.Controller');

class EmployeesController extends FileAppController {
	public $helpers = array('Html', 'Form');

    public function index() {
	}

    public function panels() {
    }

    public function newEmployee() {
        //$this->layout = 'some';
    }
	
	public function edit($id = null) {
        $this->set('GLOBAL_DOCS', $this->GLOBAL_DOCS);
        $this->set('GLOBAL_TAGS', $this->GLOBAL_TAGS);
        $this->set('DIGITAL_DOCS_PATH', $this->DIGITAL_DOCS_PATH);

        //echo 'DIR: ' . WWW_ROOT . 'documents' . DS . 'archivo.txt';
        //echo 'DIR: ' . Router::url('File', true) . 'documents' . DS . 'archivo.txt';
        //echo 'DIR: ' . $this->webroot . 'File/PCI123/' . 'archivo.txt';

        //echo "PATH: " . IMAGE_HTTP_PATH;

        if(!$id) throw  new  NotFoundException(__('Id de empleado vacio'));
		
		$employee = $this->Employee->findById($id);
		if(!$employee) throw new NotFoundException(__('Empleado no encontrado'));

        // Stores the employee id that is current selected to be edited
        $this->Session->write('currentEmployeeID', $id);

        if($this->request->is(array('post', 'put')))
		{
			$this->Employee->id = $id;
            //print_r($this->request->data['Employee']);

            // Rebuilding the code
            $name = substr($this->request->data['Employee']['name'], 0, 1);
            $paternal = substr($this->request->data['Employee']['paternal_surname'], 0, 1);
            $maternal = substr($this->request->data['Employee']['maternal_surname'], 0, 1);
            $year = substr($this->request->data['Employee']['born_date']['year'], 2, 2);

            $this->request->data['Employee']['code'] = strtoupper($paternal
                                                    . $maternal
                                                    . $name
                                                    . $year
                                                    . $this->request->data['Employee']['born_date']['month']
                                                    . $this->request->data['Employee']['born_date']['day']);

            $this->request->data['Employee']['name'] = strtoupper($this->request->data['Employee']['name']);
            $this->request->data['Employee']['paternal_surname'] = strtoupper($this->request->data['Employee']['paternal_surname']);
            $this->request->data['Employee']['maternal_surname'] = strtoupper($this->request->data['Employee']['maternal_surname']);
            $this->request->data['Employee']['ci'] = strtoupper($this->request->data['Employee']['ci']);

            //$this->Employee->set( $this->request->data['Employee'] );
            if($this->Employee->validates())
            {
                if($this->Employee->save($this->request->data))
                {
                    $dir = new Folder($this->DIGITAL_DOCS_PATH . DS . $employee['Employee']['code'], true);
                    move_uploaded_file(
                        $this->data['Employee']['profile_photo']['tmp_name'],
                        $this->DIGITAL_DOCS_PATH . $this->request->data['Employee']['code'] . '/profile_photo.jpg'
                    );

                    $this->Session->setFlash(__('La información guardada exitosamente.'));
                    //return $this->redirect(array('action' => 'index'));
                }

                $this->Session->setFlash(__('No se pudo guardar la información del empleado.'));
            }
		}
		
		if(!$this->request->data['Employee'])
			$this->request->data  =  $employee;
		
		//$userinfo = $this->Userinfo->find('first', array('conditions' => array('USERID' => $id)));
		//$this->set('userinfoView', $userinfo['Userinfo']);
		
		//$this->Employee->id = $id;
		//if (!$this->Employee->exists()) throw new NotFoundException(__('Usuario Inválido'));
		//print_r( $this->Employee );
		
		
		//$employee = $this->Employee->find('first', array('conditions' => array('id' => $id)));
		//$employee = $this->Employee->findById($id);
		
		//$employee = $this->Employee->findAll();
		//$this->set('employee', $employee['Employee']);
		//print_r($employee);
		//echo "My name= " . $employee['Employee']['name'];
		
		//echo "Name: ". $userinfo['Userinfo']['Name'];
		
		//print_r($userinfo);
	}
}
