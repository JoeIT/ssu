<?php
App::uses('ArticleAppController', 'Article.Controller');
/**
 * Categories Controller
 *
 * @property Leavecla $Leavecla
*/
class LeaveclasController extends ArticleAppController {
	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		if ($this->request->isAjax()){
			$this->layout = null;
		}
		$this->Leavecla->recursive = 0;
		
		if ($this->request->isGet()){
			if (!empty($this->request->named['filter'])){
				$filter = array();
				$filter['Leavecla']['filter'] = $this->request->named['filter'];
				if (!empty($this->request->params['named']['page'])){
					$filter['Leavecla']['page'] = $this->request->named['page'];
				}else{
					$filter['Leavecla']['page'] = 1;
				}
				$this->request->data = am($this->request->data,$filter);
			}else{
				$filter = array();
				$filter['Leavecla'] = $this->Cookie->read('srcPassArg');
				if (!empty($filter['Leavecla'])){
					$this->request->data = am($this->request->data,$filter);
				}
			}
		}
		
		
		$passArg = array();
		$conditions = array();
		if (!empty($this->data['Leavecla']) && !empty($this->data['Leavecla']['filter'])){
			$conditions = array('LEAVENAME LIKE '  => '%'.trim($this->data['Leavecla']['filter']).'%');
			$passArg = $this->data['Leavecla'];
		}
		if (!empty($this->request->params['named']['page'])){
			$passArg['page'] = $this->request->params['named']['page'];
		}else{
			if (!empty($this->request->data['Leavecla']['page'])){
				$this->request->params['named']['page'] = $this->request->data['Leavecla']['page'];
			}
		}
		
		//$paginate = array('limit' => 2);
		$paginate = array('limit' => 50);
		
		if (!empty($conditions)){
			$paginate['conditions'] = $conditions;
		}
		//print_r($this->data);
		
		$this->paginate = $paginate;
		
		$this->set('passArg',$passArg);
		
		if (!empty($passArg)){
			$this->Cookie->write('srcPassArg',$passArg);
		}
		
		$this->set('leaveclas', $this->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this->Leavecla->id = $id;
		if (!$this->Leavecla->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		$this->set('leaveclas', $this->Leavecla->read(null, $id));
	}

	/**
	 * add method
	 *
	 * @return void
	 */
	public function add() {
		$errors = array();
                    if ($this->request->is('post')) {
                        try{
                            $this->Leavecla->create();
                            if ($this->Leavecla->save($this->request->data)) {
                                    $this->Cookie->delete('srcPassArg');
                                    $this->redirect(array('action' => 'index'));
                            }else {
                                    $errors = $this->Leavecla->validationErrors;
                            }
                        }catch(Exception $sql){
                            $errors = array(0=>str_replace('SQLSTATE[42000]: [Microsoft][SQL Server Native Client 11.0][SQL Server]','',$sql->getMessage())." <b>".$this->data['Leavecla']['LEAVENAME']."</b>");
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
		$this->Leavecla->id = $id;
                $this->set('id',$id);
		if (!$this->Leavecla->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
                    try{
			if ($this->Leavecla->save($this->request->data)) {
				$this->redirect(array('action' => 'index'));
			} else {
				$errors = $this->Leavecla->validationErrors;
			}
                    }catch(Exception $sql){
                        $errors = array(0=>str_replace('SQLSTATE[42000]: [Microsoft][SQL Server Native Client 11.0][SQL Server]','',$sql->getMessage())." <b>".$this->data['Leavecla']['LEAVENAME']."</b>");
                    }    
		} else {
			$this->request->data = am($this->request->data,$this->Leavecla->read(null, $id));
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
		$this->Leavecla->id = $id;
		if (!$this->Leavecla->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		if ($this->Leavecla->delete()) {
			//$this->Session->setFlash(__('Leavecla deleted'));
			//$this->redirect(array('action' => 'index'));
		}
		//$this->Session->setFlash(__('Leavecla was not deleted'));
		//$this->redirect(array('action' => 'index'));
	}
}
