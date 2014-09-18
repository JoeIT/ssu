<?php
App::uses('ArticleAppController', 'Article.Controller');
/**
 * Categories Controller
 *
 * @property Numrun $Numrun
*/
class NumrunsController extends ArticleAppController {
	/**
	 * index method
	 *
	 * @return void
	 */
	public function index() {
		if ($this->request->isAjax()){
			$this->layout = null;
		}
		$this->Numrun->recursive = 0;
		
		if ($this->request->isGet()){
			if (!empty($this->request->named['filter'])){
				$filter = array();
				$filter['Numrun']['filter'] = $this->request->named['filter'];
				if (!empty($this->request->params['named']['page'])){
					$filter['Numrun']['page'] = $this->request->named['page'];
				}else{
					$filter['Numrun']['page'] = 1;
				}
				$this->request->data = am($this->request->data,$filter);
			}else{
				$filter = array();
				$filter['Numrun'] = $this->Cookie->read('srcPassArg');
				if (!empty($filter['Numrun'])){
					$this->request->data = am($this->request->data,$filter);
				}
			}
		}
		
		
		$passArg = array();
		$conditions = array();
		if (!empty($this->data['Numrun']) && !empty($this->data['Numrun']['filter'])){
			$conditions = array('NAME LIKE '  => '%'.trim($this->data['Numrun']['filter']).'%');
			$passArg = $this->data['Numrun'];
		}
		if (!empty($this->request->params['named']['page'])){
			$passArg['page'] = $this->request->params['named']['page'];
		}else{
			if (!empty($this->request->data['Numrun']['page'])){
				$this->request->params['named']['page'] = $this->request->data['Numrun']['page'];
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
		
		$this->set('numruns', $this->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this->Numrun->id = $id;
		if (!$this->Numrun->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
                App::uses('Numrundeil', 'Article.Model');
                $deiles = new Numrundeil();
                $rs = $deiles->find('all',array('conditions'=>array('NUM_RUNID' => $id)));
		$this->set("deil", $rs);
		$this->set('numruns', $this->Numrun->read(null, $id));
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
                            $this->Numrun->create();
                            if ($this->Numrun->save($this->request->data)) {
                                    $this->Cookie->delete('srcPassArg');
                                    $this->redirect(array('action' => 'index'));
                            }else {
                                    $errors = $this->Numrun->validationErrors;
                            }
                        }catch(Exception $sql){
                            $errors = array(0=>str_replace('SQLSTATE[42000]: [Microsoft][SQL Server Native Client 11.0][SQL Server]','',$sql->getMessage())." <b>".$this->data['Numrun']['NAME']."</b>");
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
		$this->Numrun->id = $id;
                $this->set('id',$id);
		if (!$this->Numrun->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
                    try{
			if ($this->Numrun->save($this->request->data)) {
				$this->redirect(array('action' => 'index'));
			} else {
				$errors = $this->Numrun->validationErrors;
			}
                    }catch(Exception $sql){
                        $errors = array(0=>str_replace('SQLSTATE[42000]: [Microsoft][SQL Server Native Client 11.0][SQL Server]','',$sql->getMessage())." <b>".$this->data['Numrun']['NAME']."</b>");
                    }    
		} else {
			$this->request->data = am($this->request->data,$this->Numrun->read(null, $id));
		}
                 App::uses('Numrundeil', 'Article.Model');
                $deiles = new Numrundeil();
                $rs = $deiles->find('all',array('conditions'=>array('NUM_RUNID' => $id)));
		$this->set("deil", $rs);
		$this->set('errors',$errors);
	}
        public function editDeil($id = null) {
		$this->autoRender = false;
		$var = array();
		/*$this->Group->id = $id;
		if ($this->Group->exists() && $this->request->isAjax()) {
			if ($this->request->is('post') || $this->request->is('put')) {
				if ($this->Group->save($this->request->data)) {
					$var['error'] = 0;
				} else {
					$var['error'] = 1;
					$errors = $this->Group->validationErrors;
					$var['error_message'] = implode('<br />', $errors['name']);
				}
			}
		}*/
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
		$this->Numrun->id = $id;
		if (!$this->Numrun->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		if ($this->Numrun->delete()) {
			//$this->Session->setFlash(__('Numrun deleted'));
			//$this->redirect(array('action' => 'index'));
		}
		//$this->Session->setFlash(__('Numrun was not deleted'));
		//$this->redirect(array('action' => 'index'));
	}
}
