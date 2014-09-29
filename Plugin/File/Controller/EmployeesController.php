<?php
App::uses('FileAppController', 'File.Controller');

class EmployeesController extends FileAppController {
	public $helpers = array('Html', 'Form');
	
	public function index() {
	}
	
	public function add() {
	}
	
	public function edit($id = null) {
		if(!$id) throw  new  NotFoundException(__('Id de empleado vacio!'));
		
		$employee = $this->Employee->findById($id);
		if(!$employee) throw new NotFoundException(__('Invalid  employee'));
		
		if ($this->request->is(array('post',  'put')))
		{
			$this->Employee->id = $id;
			if ($this->Employee->save($this->request->data))
			{
				$this->Session->setFlash(__('Your Employee data has been updated.'));
				return  $this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash(__('Unable to update your employee data.'));			
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

	public function delete() {
	}
}
