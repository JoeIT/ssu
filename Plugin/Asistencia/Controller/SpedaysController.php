<?php
App::uses('AsistenciaAppController', 'Asistencia.Controller');
/**
 * Categories Controller
 *
 * @property Userinfo $Userinfo
*/
class SpedaysController extends AsistenciaAppController {
    public $uses = array('Asistencia.Speday','Asistencia.Userspeday','Article.Userinfo');
    var $components = array('RequestHandler');
    public function index() {
        if ($this->request->isAjax()){
            $this->layout = null;
        }
        //$this->Speday->recursive = 1;
        if ($this->request->isGet()){
                if (!empty($this->request->named['filter'])){
                        $filter = array();
                        $filter['Speday']['filter'] = $this->request->named['filter'];
                        if (!empty($this->request->params['named']['page'])){
                                $filter['Speday']['page'] = $this->request->named['page'];
                        }else{
                                $filter['Speday']['page'] = 1;
                        }
                        $this->request->data = am($this->request->data,$filter);
                }else{
                        $filter = array();
                        $filter['Speday'] = $this->Cookie->read('srcPassArg');
                        if (!empty($filter['Speday'])){
                                $this->request->data = am($this->request->data,$filter);
                        }
                }
        }
        $passArg = array();
        $conditions = array();
        if (!empty($this->data['Speday']) && !empty($this->data['Speday']['filter'])){
                $conditions = array('detalle LIKE '  => '%'.trim($this->data['Speday']['filter']).'%');
                $passArg = $this->data['Speday'];
        }
        if (!empty($this->request->params['named']['page'])){
                $passArg['page'] = $this->request->params['named']['page'];
        }else{
                if (!empty($this->request->data['Speday']['page'])){
                        $this->request->params['named']['page'] = $this->request->data['Speday']['page'];
                }
        }

        //$paginate = array('limit' => 2);
        $paginate = array('limit' => 50,'order'=>'id DESC');

        if (!empty($conditions)){
                $paginate['conditions'] = $conditions;
        }
        //print_r($this->data);

        $this->paginate = $paginate;

        $this->set('passArg',$passArg);

        if (!empty($passArg)){
                $this->Cookie->write('srcPassArg',$passArg);
        }

        $this->set('spedays', $this->paginate());
    }
    
    public function add() {
            $errors = array();
                if ($this->request->is('post')) {
                    try{
                        $this->Speday->create();
                        if ($this->Speday->save($this->request->data)) {
                                $this->Cookie->delete('srcPassArg');
                                if($this->request->data['Speday']['departamento']==0 && $this->request->data['Speday']['personal']==0){
                                    App::uses('Department', 'Article.Model');
                                    $userModel = new Department();
                                    $rs = $userModel->query('SELECT d.* FROM DEPARTMENTS d WHERE NOT EXISTS ( SELECT 1 FROM DEPARTMENTS hijo WHERE d.DEPTID=hijo.SUPDEPTID ) ORDER BY d.DEPTID ASC');
                                    $datos=array();
                                    foreach($rs AS $dpt){
                                        $userinfo=$this->Userinfo->find('all',array('conditions'=>array('DEFAULTDEPTID'=>$dpt[0]['DEPTID'],'ZIP'=>1)));
                                        foreach ($userinfo AS $inf){
                                            $datos[]=array('USERID'=>$inf['Userinfo']['USERID'],'STARTSPECDAY'=>$this->data['Speday']['fechai'],'ENDSPECDAY'=>$this->data['Speday']['fechaf'],'DATEID'=>$this->data['Speday']['leaveid'],'YUANYING'=>$this->data['Speday']['detalle'],'DATE'=>$this->Speday->created,'SPEDID'=>$this->Speday->id);;
                                        }
                                    }
                                    $this->Userspeday->create();
                                    if ($this->Userspeday->saveMany($datos)){
                                        $this->redirect(array('action' => 'index'));
                                    }
                                }elseif($this->request->data['Speday']['departamento']>0 && $this->request->data['Speday']['personal']==0){
                                    $userinfo=$this->Userinfo->find('all',array('conditions'=>array('DEFAULTDEPTID'=>$this->request->data['Speday']['departamento'],'ZIP'=>1)));
                                    $datos=array();
                                    foreach ($userinfo AS $inf){
                                        $datos[]=array('USERID'=>$inf['Userinfo']['USERID'],'STARTSPECDAY'=>$this->data['Speday']['fechai'],'ENDSPECDAY'=>$this->data['Speday']['fechaf'],'DATEID'=>$this->data['Speday']['leaveid'],'YUANYING'=>$this->data['Speday']['detalle'],'DATE'=>$this->Speday->created,'SPEDID'=>$this->Speday->id);;
                                    }
                                    $this->Userspeday->create();
                                    if ($this->Userspeday->saveMany($datos)){
                                        $this->redirect(array('action' => 'index'));
                                    }
                                }else{
                                    $this->Userspeday->create();
                                    $datos=array('USERID'=>$this->data['Speday']['personal'],'STARTSPECDAY'=>$this->data['Speday']['fechai'],'ENDSPECDAY'=>$this->data['Speday']['fechaf'],'DATEID'=>$this->data['Speday']['leaveid'],'YUANYING'=>$this->data['Speday']['detalle'],'DATE'=>$this->Speday->created,'SPEDID'=>$this->Speday->id);
                                    if ($this->Userspeday->save($datos)){
                                        $this->redirect(array('action' => 'index'));
                                    }
                                    //$errors[]=array('aqui hay datos : '.$this->request->data['Speday']['departamento'].' - '.$this->request->data['Speday']['personal']);
                                }
                                
                        }else {
                                $errors[] = $this->Speday->validationErrors;
                        }
                    }catch(Exception $sql){
                        $errors[] = array(str_replace('SQLSTATE[42000]: [Microsoft][SQL Server Native Client 11.0][SQL Server]','',$sql->getMessage())." <b>".$this->data['Speday']['detalle']."</b>");
                    }
                }
            $this->set('errors',$errors);
    }
    public function edit($id = null) {
            $errors = array();
            $this->Speday->id = $id;
            $this->set('id',$id);
            if (!$this->Speday->exists()) {
                    throw new NotFoundException(__('Usuario Inválido'));
            }
            if ($this->request->is('post') || $this->request->is('put')) {
                try{
                    if ($this->Speday->save($this->request->data)) {
                            $this->redirect(array('action' => 'index'));
                    } else {
                            $errors = $this->Speday->validationErrors;
                    }
                }catch(Exception $sql){
                    $errors = array(0=>str_replace('SQLSTATE[42000]: [Microsoft][SQL Server Native Client 11.0][SQL Server]','',$sql->getMessage())." <b>".$this->data['Speday']['detalle']."</b>");
                }    
            } else {
                    $this->request->data = am($this->request->data,$this->Speday->read(null, $id));
            }
            $this->set('errors',$errors);
    }
    /*public function getcategory() {
		$_id = $this->request->data['Speday']['departamento'];
		$subcategories = $this->Userinfo->find('list', array(
			'conditions' => array('Userinfo.DEFAULTDEPTID' => $_id),
			'recursive' => -1
			));
 
		$this->set('subcategories',$subcategories);
		$this->layout = 'ajax';
	}*/
    public function delete($id = null) {
            $this->autoRender = false;
            if (!$this->request->is('post')) {
                    throw new MethodNotAllowedException();
            }
            $this->Speday->id = $id;
            if (!$this->Speday->exists()) {
                    throw new NotFoundException(__('Usuario Inválido'));
            }
            
            if ($this->Speday->delete()) {
                if($this->Userspeday->deleteAll(array('Userspeday.SPEDID'=>$id),false)){
                }
                    //$this->Session->setFlash(__('Schcla deleted'));
                    //$this->redirect(array('action' => 'index'));
            }
    }
}
