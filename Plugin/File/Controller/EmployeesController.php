<?php
App::uses('FileAppController', 'File.Controller');

class EmployeesController extends FileAppController {
	public $uses = array('Article.Userinfo');
	
	public $helpers = array('Html', 'Form');

	
	public function index() {
		
	}
	
	public function add() {          
	}
	
	public function edit($id = null) {
		if(!$id) throw  new  NotFoundException(__('Id de empleado vacio!'));
		
		$userinfo = $this->Userinfo->find('first', array('conditions' => array('USERID' => $id)));
		$this->set('userinfoView', $userinfo['Userinfo']);
		
		if (!$this->request->data)
			$this->request->data = $userinfo;
			
		//echo "Name: ". $userinfo['Userinfo']['Name'];
		
		//print_r($userinfo);
		
		/*
		if ($this->request->is(array('post',  'put')))
		{
			$this->Userinfo->id = $id;
			if ($this->Userinfo->save($this->request->data))
			{
				$this->Session->setFlash(__('La información del empleado a sido modificada.'));
				return  $this->redirect(array('action' => 'index'));
			}
			
			$this->Session->setFlash(__('No se pudo modificar la información de empleado.'));			
		}
		
		if (!$this->request->data)
			$this->request->data = $employee;
		*/
	}

	public function delete() {
	}
}
