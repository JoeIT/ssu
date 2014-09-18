<?php
App::uses('ArticleAppController', 'Article.Controller');
/**
 * Categories Controller
 *
 * @property Holiday $Holiday
*/
class HolidaysController extends ArticleAppController {
	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		if ($this->request->isAjax()){
			$this->layout = null;
		}
		$this->Holiday->recursive = 0;
		
		if ($this->request->isGet()){
			if (!empty($this->request->named['filter'])){
				$filter = array();
				$filter['Holiday']['filter'] = $this->request->named['filter'];
				if (!empty($this->request->params['named']['page'])){
					$filter['Holiday']['page'] = $this->request->named['page'];
				}else{
					$filter['Holiday']['page'] = 1;
				}
				$this->request->data = am($this->request->data,$filter);
			}else{
				$filter = array();
				$filter['Holiday'] = $this->Cookie->read('srcPassArg');
				if (!empty($filter['Holiday'])){
					$this->request->data = am($this->request->data,$filter);
				}
			}
		}
		
		
		$passArg = array();
		$conditions = array();
		if (!empty($this->data['Holiday']) && !empty($this->data['Holiday']['filter'])){
			$conditions = array('HOLIDAYNAME LIKE '  => '%'.trim($this->data['Holiday']['filter']).'%');
			$passArg = $this->data['Holiday'];
		}
		if (!empty($this->request->params['named']['page'])){
			$passArg['page'] = $this->request->params['named']['page'];
		}else{
			if (!empty($this->request->data['Holiday']['page'])){
				$this->request->params['named']['page'] = $this->request->data['Holiday']['page'];
			}
		}
		
		//$paginate = array('limit' => 2);
		$paginate = array('limit' => 50,'order'=>'STARTTIME DESC');
		
		if (!empty($conditions)){
			$paginate['conditions'] = $conditions;
		}
		//print_r($this->data);
		
		$this->paginate = $paginate;
		
		$this->set('passArg',$passArg);
		
		if (!empty($passArg)){
			$this->Cookie->write('srcPassArg',$passArg);
		}
		
		$this->set('holidays', $this->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this->Holiday->id = $id;
		if (!$this->Holiday->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		$this->set('holidays', $this->Holiday->read(null, $id));
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
                            $this->Holiday->create();
                            if ($this->Holiday->save($this->request->data)) {
                                    $this->Cookie->delete('srcPassArg');
                                    $this->redirect(array('action' => 'index'));
                            }else {
                                    $errors = $this->Holiday->validationErrors;
                            }
                        }catch(Exception $sql){
                            $errors = array(0=>str_replace('SQLSTATE[42000]: [Microsoft][SQL Server Native Client 11.0][SQL Server]','',$sql->getMessage())." <b>".$this->data['Holiday']['HOLIDAYNAME']."</b>");
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
		$this->Holiday->id = $id;
                $this->set('id',$id);
		if (!$this->Holiday->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
                    try{
			if ($this->Holiday->save($this->request->data)) {
				$this->redirect(array('action' => 'index'));
			} else {
				$errors = $this->Holiday->validationErrors;
			}
                    }catch(Exception $sql){
                        $errors = array(0=>str_replace('SQLSTATE[42000]: [Microsoft][SQL Server Native Client 11.0][SQL Server]','',$sql->getMessage())." <b>".$this->data['Holiday']['HOLIDAYNAME']."</b>");
                    }    
		} else {
			$this->request->data = am($this->request->data,$this->Holiday->read(null, $id));
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
		$this->Holiday->id = $id;
		if (!$this->Holiday->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		if ($this->Holiday->delete()) {
			//$this->Session->setFlash(__('Holiday deleted'));
			//$this->redirect(array('action' => 'index'));
		}
		//$this->Session->setFlash(__('Holiday was not deleted'));
		//$this->redirect(array('action' => 'index'));
	}
}
