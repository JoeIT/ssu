<?php
App::uses('TurnoAppController', 'Turno.Controller');
/**
 * Categories Controller
 *
 * @property Userinfo $Userinfo
*/
class AsignacionsController extends TurnoAppController {
    public $uses = array('Article.Userinfo');
	public function index() {
		if ($this->request->isAjax()){
			$this->layout = null;
		}
		$this->Userinfo->recursive = 0;
		
		if ($this->request->isGet()){
			if (!empty($this->request->named['filter'])){
				$filter = array();
				$filter['Userinfo']['filter'] = $this->request->named['filter'];
				if (!empty($this->request->params['named']['page'])){
					$filter['Userinfo']['page'] = $this->request->named['page'];
				}else{
					$filter['Userinfo']['page'] = 1;
				}
				$this->request->data = am($this->request->data,$filter);
			}else{
				$filter = array();
				$filter['Userinfo'] = $this->Cookie->read('srcPassArg');
				if (!empty($filter['Userinfo'])){
					$this->request->data = am($this->request->data,$filter);
				}
			}
		}
		
		
		$passArg = array();
		$conditions = array(' ZIP = '=>'1');
		if (!empty($this->data['Asignacion']) && !empty($this->data['Asignacion']['filter'])){
			$conditions = array(' Name LIKE '  => '%'.trim($this->data['Asignacion']['filter']).'%',' ZIP = '=>'1');
			$passArg = $this->data['Asignacion'];
		}
		if (!empty($this->request->params['named']['page'])){
			$passArg['page'] = $this->request->params['named']['page'];
		}else{
			if (!empty($this->request->data['Asignacion']['page'])){
				$this->request->params['named']['page'] = $this->request->data['Asignacion']['page'];
			}
		}
		
		//$paginate = array('limit' => 2);
		$paginate = array('limit' => 50,'order'=>'USERID DESC');
		
		if (!empty($conditions)){
			$paginate['conditions'] = $conditions;
		}
		//print_r($this->data);
		
		$this->paginate = $paginate;
		
		$this->set('passArg',$passArg);
		
		if (!empty($passArg)){
			$this->Cookie->write('srcPassArg',$passArg);
		}
		
		$this->set('asignacions', $this->paginate());
	}

	/**
	 * view method
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this->Userinfo->id = $id;
		if (!$this->Userinfo->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		$this->set('asignacions', $this->Userinfo->read(null, $id));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function supervisor($id = null) {
		$this->autoRender = false;
                $this->Userinfo->id=$id;
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		if (!$this->Userinfo->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
                //$this->request->data['STATE'];
                $data = array('id' => $id, 'STATE' => $this->request->data['STATE']);
		if ($this->Userinfo->save($data)) {
		}
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
		$this->Userinfo->id = $id;
                $this->set('id',$id);
		if (!$this->Userinfo->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
                    try{
			if ($this->Userinfo->save($this->request->data)) {
				$this->redirect(array('action' => 'index'));
			} else {
				$errors = $this->Userinfo->validationErrors;
			}
                    }catch(Exception $sql){
                            $errors = str_replace('SQLSTATE[42000]: [Microsoft][SQL Server Native Client 11.0][SQL Server]','',$sql->getMessage())." <b>".$this->data['Userinfo']['Badgenumber']."</b>";
                        }    
		} else {
			$this->request->data = am($this->request->data,$this->Userinfo->read(null, $id));
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
		$this->Userinfo->id = $id;
		if (!$this->Userinfo->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		if ($this->Userinfo->delete()) {
			//$this->Session->setFlash(__('Userinfo deleted'));
			//$this->redirect(array('action' => 'index'));
		}
		//$this->Session->setFlash(__('Userinfo was not deleted'));
		//$this->redirect(array('action' => 'index'));
	}
       
}
