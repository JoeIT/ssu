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
        if(!$id) throw  new  NotFoundException(__('Id de empleado vacio'));
		
		$employee = $this->Employee->findById($id);
		if(!$employee) throw new NotFoundException(__('Empleado no encontrado'));

        // Stores the employee id that is current selected to be edited
        $this->Session->write('currentEmployeeID', $id);

        if ($this->request->is(array('post',  'put')))
		{
			$this->Employee->id = $id;

            if($this->Employee->validates())
            {
                if($this->Employee->save($this->request->data))
                {
                    $this->Session->setFlash(__('La información guardada exitosamente.'));
                    return  $this->redirect(array('action' => 'index'));
                }

                $this->Session->setFlash(__('No se pudo guardar la información del empleado.'));
            }
		}
		
		if (!$this->request->data['Employee'])
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
