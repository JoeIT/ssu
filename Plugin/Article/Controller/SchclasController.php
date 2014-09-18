<?php
App::uses('ArticleAppController', 'Article.Controller');
/**
 * Categories Controller
 *
 * @property Schcla $Schcla
*/
class SchclasController extends ArticleAppController {
	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		if ($this->request->isAjax()){
			$this->layout = null;
		}
		$this->Schcla->recursive = 0;
		
		if ($this->request->isGet()){
			if (!empty($this->request->named['filter'])){
				$filter = array();
				$filter['Schcla']['filter'] = $this->request->named['filter'];
				if (!empty($this->request->params['named']['page'])){
					$filter['Schcla']['page'] = $this->request->named['page'];
				}else{
					$filter['Schcla']['page'] = 1;
				}
				$this->request->data = am($this->request->data,$filter);
			}else{
				$filter = array();
				$filter['Schcla'] = $this->Cookie->read('srcPassArg');
				if (!empty($filter['Schcla'])){
					$this->request->data = am($this->request->data,$filter);
				}
			}
		}
		$passArg = array();
		$conditions = array();
		if (!empty($this->data['Schcla']) && !empty($this->data['Schcla']['filter'])){
			$conditions = array('SCHNAME LIKE '  => '%'.trim($this->data['Schcla']['filter']).'%');
			$passArg = $this->data['Schcla'];
		}
		if (!empty($this->request->params['named']['page'])){
			$passArg['page'] = $this->request->params['named']['page'];
		}else{
			if (!empty($this->request->data['Schcla']['page'])){
				$this->request->params['named']['page'] = $this->request->data['Schcla']['page'];
			}
		}
		
		//$paginate = array('limit' => 2);
		$paginate = array('limit' => 50,'order'=>'SCHCLASSID ASC');
		
		if (!empty($conditions)){
			$paginate['conditions'] = $conditions;
		}
		//print_r($this->data);
		
		$this->paginate = $paginate;
		
		$this->set('passArg',$passArg);
		
		if (!empty($passArg)){
			$this->Cookie->write('srcPassArg',$passArg);
		}
		
		$this->set('schclas', $this->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this->Schcla->id = $id;
		if (!$this->Schcla->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		$this->set('schclas', $this->Schcla->read(null, $id));
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
                            $this->Schcla->create();
                            if ($this->Schcla->save($this->request->data)) {
                                    $this->Cookie->delete('srcPassArg');
                                    $this->redirect(array('action' => 'index'));
                            }else {
                                    $errors = $this->Schcla->validationErrors;
                            }
                        }catch(Exception $sql){
                            $errors[] = str_replace('SQLSTATE[42000]: [Microsoft][SQL Server Native Client 11.0][SQL Server]','',$sql->getMessage())." <b>".$this->data['Schcla']['SCHNAME']."</b>";
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
		$this->Schcla->id = $id;
                $this->set('id',$id);
		if (!$this->Schcla->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
                    try{
			if ($this->Schcla->save($this->request->data)) {
				$this->redirect(array('action' => 'index'));
			} else {
				$errors = $this->Schcla->validationErrors;
			}
                    }catch(Exception $sql){
                        $errors = array(0=>str_replace('SQLSTATE[42000]: [Microsoft][SQL Server Native Client 11.0][SQL Server]','',$sql->getMessage())." <b>".$this->data['Schcla']['SCHNAME']."</b>");
                    }    
		} else {
			$this->request->data = am($this->request->data,$this->Schcla->read(null, $id));
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
		$this->Schcla->id = $id;
		if (!$this->Schcla->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		if ($this->Schcla->delete()) {
			//$this->Session->setFlash(__('Schcla deleted'));
			//$this->redirect(array('action' => 'index'));
		}
		//$this->Session->setFlash(__('Schcla was not deleted'));
		//$this->redirect(array('action' => 'index'));
	}
}
