<?php
App::uses('ArticleAppController', 'Article.Controller');
/**
 * Categories Controller
 *
 * @property Userinfo $Userinfo
*/
class UserinfosController extends ArticleAppController {
    //public $uses = array('Article.Userinfo','Article.Department'); 
	/**
	 * index method
	 *
	 * @return void
	 */
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
		$conditions = array();
		if (!empty($this->data['Userinfo']) && !empty($this->data['Userinfo']['filter'])){
			$conditions = array(' Name LIKE '  => '%'.trim($this->data['Userinfo']['filter']).'%');
			$passArg = $this->data['Userinfo'];
		}
		if (!empty($this->request->params['named']['page'])){
			$passArg['page'] = $this->request->params['named']['page'];
		}else{
			if (!empty($this->request->data['Userinfo']['page'])){
				$this->request->params['named']['page'] = $this->request->data['Userinfo']['page'];
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
		
		$this->set('userinfos', $this->paginate());
	}

	/**
	 * view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function view($id = null) {
		$this->Userinfo->id = $id;
		if (!$this->Userinfo->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
		$this->set('userinfo', $this->Userinfo->read(null, $id));
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
                            $this->Userinfo->create();
                            if ($this->Userinfo->save($this->request->data)) {
                                    $this->Cookie->delete('srcPassArg');
                                    $this->redirect(array('action' => 'index'));
                            }else {
                                    $errors = $this->Userinfo->validationErrors;
                            }
                        }catch(Exception $sql){
                            $errors = str_replace('SQLSTATE[42000]: [Microsoft][SQL Server Native Client 11.0][SQL Server]','',$sql->getMessage())." <b>".$this->data['Userinfo']['Badgenumber']."</b>";
                        }    
                    }
                $datt=$this->Userinfo->find('first',array('order'=>'USERID DESC'));
                $this->set('max',$datt['Userinfo']['Badgenumber']+1);
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
        public function baja($id = null) {
		$this->autoRender = false;
                $this->Userinfo->id=$id;
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		if (!$this->Userinfo->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
                $data = array('id' => $id, 'ZIP' => '0');
		if ($this->Userinfo->save($data)) {
		}
	}
        public function alta($id = null) {
		$this->autoRender = false;
                $this->Userinfo->id=$id;
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		if (!$this->Userinfo->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
                $data = array('id' => $id, 'ZIP' => '1');
		if ($this->Userinfo->save($data)) {
		}
	}
}
