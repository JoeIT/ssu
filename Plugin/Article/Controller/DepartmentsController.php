<?php
App::uses('ArticleAppController', 'Article.Controller');
/**
 * Categories Controller
 *
 * @property Department $Department
*/
class DepartmentsController extends ArticleAppController {
	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		if ($this->request->isAjax()){
			$this->layout = null;
		}
		$this->Department->recursive = 0;
		
		if ($this->request->isGet()){
			if (!empty($this->request->named['filter'])){
				$filter = array();
				$filter['Department']['filter'] = $this->request->named['filter'];
				if (!empty($this->request->params['named']['page'])){
					$filter['Department']['page'] = $this->request->named['page'];
				}else{
					$filter['Department']['page'] = 1;
				}
				$this->request->data = am($this->request->data,$filter);
			}else{
				$filter = array();
				$filter['Department'] = $this->Cookie->read('srcPassArg');
				if (!empty($filter['Department'])){
					$this->request->data = am($this->request->data,$filter);
				}
			}
		}
		
		
		$passArg = array();
		$conditions = array();
		if (!empty($this->data['Department']) && !empty($this->data['Department']['filter'])){
			$conditions = array(' DEPTNAME LIKE '  => '%'.trim($this->data['Department']['filter']).'%');
			$passArg = $this->data['Department'];
		}
		if (!empty($this->request->params['named']['page'])){
			$passArg['page'] = $this->request->params['named']['page'];
		}else{
			if (!empty($this->request->data['Department']['page'])){
				$this->request->params['named']['page'] = $this->request->data['Department']['page'];
			}
		}
		
		//$paginate = array('limit' => 2);
		$paginate = array('limit' => 50,'order'=>'SUPDEPTID, DEPTID ASC');
		
		if (!empty($conditions)){
			$paginate['conditions'] = $conditions;
		}
		
		//print_r($this->data);
		
		$this->paginate = $paginate;
		
		$this->set('passArg',$passArg);
		
		if (!empty($passArg)){
			$this->Cookie->write('srcPassArg',$passArg);
		}
		
		$this->set('departments', $this->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this->Department->id = $id;
		if (!$this->Department->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		$this->set('department', $this->Department->read(null, $id));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		$errors = array();
		if ($this->request->is('post')) {
			$this->Department->create();
			if ($this->Department->save($this->request->data)) {
				$this->Cookie->delete('srcPassArg');
				$this->redirect(array('action' => 'index'));
			} else {
				$errors = $this->Department->validationErrors;
			}
		}
		$this->set('errors',$errors);
	}

	/**
	 * edit method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function edit($id = null) {
		$errors = array();
		$this->Department->id = $id;
		if (!$this->Department->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Department->save($this->request->data)) {
				$this->redirect(array('action' => 'index'));
			} else {
				$errors = $this->Department->validationErrors;
			}
		} else {
			$this->request->data = am($this->request->data,$this->Department->read(null, $id));
		}
		$this->set('errors',$errors);
	}

	/**
	 * delete method
	 *
	 * @throws MethodNotAllowedException
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function delete($id = null) {
		$this->autoRender = false;
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Department->id = $id;
		if (!$this->Department->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		if ($this->Department->delete()) {
			//$this->Session->setFlash(__('Department deleted'));
			//$this->redirect(array('action' => 'index'));
		}
		//$this->Session->setFlash(__('Department was not deleted'));
		//$this->redirect(array('action' => 'index'));
	}
}
