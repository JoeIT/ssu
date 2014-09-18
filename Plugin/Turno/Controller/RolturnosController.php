<?php
App::uses('TurnoAppController', 'Turno.Controller');
/**
 * Categories Controller
 *
 * @property Userinfo $Userinfo
*/
class RolturnosController extends TurnoAppController {
    public $uses = array('Article.Userinfo','Turno.Usertempsch');
    var $components = array('RequestHandler');
    public function index(){
        
    }
    public function cambiost($dept){
        $this->set('titulo',$val);
        $userinfo = $this->Userinfo->find('all', array('conditions' => array('DEFAULTDEPTID' => $dept,'ZIP'=>1)));
        $this->set('userinfos',$userinfo);
    }
    public function turno() {
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
                $conditions = array('ZIP = '=>'1','STATE = '=>'');
                    if (!empty($this->data['Rolturno']) && !empty($this->data['Rolturno']['filter'])){
                            $conditions = array(' Name LIKE '  => '%'.trim($this->data['Rolturno']['filter']).'%','ZIP = '=>'1','STATE = '=>'');
                            $passArg = $this->data['Rolturno'];
                    }
                    if (!empty($this->request->params['named']['page'])){
                            $passArg['page'] = $this->request->params['named']['page'];
                    }else{
                            if (!empty($this->request->data['Rolturno']['page'])){
                                    $this->request->params['named']['page'] = $this->request->data['Rolturno']['page'];
                            }
                    }
                    
		//$paginate = array('limit' => 2);
		$paginate = array('limit' => 50,'order'=>'USERID DESC');
		
		if (!empty($conditions)){
			$paginate['conditions'] = $conditions;
		}
		
		$this->paginate = $paginate;
		
		$this->set('passArg',$passArg);
		
		if (!empty($passArg)){                                  
			$this->Cookie->write('srcPassArg',$passArg);
		}
		$this->set('rolturnos', $this->paginate());
	}
        public function turno1() {
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
                $conditions = array('ZIP = '=>'1','STATE != '=>'');
                    if (!empty($this->data['Rolturno']) && !empty($this->data['Rolturno']['filter'])){
                            $conditions = array(' Name LIKE '  => '%'.trim($this->data['Rolturno']['filter']).'%','ZIP = '=>'1','STATE != '=>'');
                            $passArg = $this->data['Rolturno'];
                    }
                    if (!empty($this->request->params['named']['page'])){
                            $passArg['page'] = $this->request->params['named']['page'];
                    }else{
                            if (!empty($this->request->data['Rolturno']['page'])){
                                    $this->request->params['named']['page'] = $this->request->data['Rolturno']['page'];
                            }
                    }
		//$paginate = array('limit' => 2);
		$paginate = array('limit' => 50,'order'=>'USERID DESC');
		
		if (!empty($conditions)){
			$paginate['conditions'] = $conditions;
		}
		
		$this->paginate = $paginate;
		
		$this->set('passArg',$passArg);
		
		if (!empty($passArg)){        
			$this->Cookie->write('srcPassArg',$passArg);
		}
		$this->set('rolturnos', $this->paginate());
	}
    public function view($id = null) {
		$this->Userinfo->id = $id;
		if (!$this->Userinfo->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
                
                App::uses('Userofrun', 'Turno.Model');
                $urun = new Userofrun();
                $rs = $urun->find('first',array('order'=>'ORDER_RUN DESC','conditions'=>array('USERID' => $id)));
		$this->set("userofrun", $rs);
                $this->set("id", $id);
		$this->set('userinfo', $this->Userinfo->read(null, $id));
    }
    public function view1($id = null) {
		$this->Userinfo->id = $id;
		if (!$this->Userinfo->exists()) {
			throw new NotFoundException(__('Usuario Inválido'));
		}
                App::uses('Usertempsch', 'Turno.Model');
                $urun = new Usertempsch();
                $rs = $urun->find('all',array('order'=>'COMETIME ASC','conditions'=>array('SCHCLASSID != '=>-1,'USERID' => $id)));
		$this->set("usertempsch", $rs);
                $this->set("id", $id);
		$this->set('userinfo', $this->Userinfo->read(null, $id));
    }
    public function general($id = null){
        $this->Userinfo->id = $id;
        if (!$this->Userinfo->exists()) {
                throw new NotFoundException(__('Usuario Inválido'));
        }
        $this->set("iduser", $id);
        App::uses('Userofrun', 'Turno.Model');
        $urun = new Userofrun();
        $rs = $urun->find('all',array('order'=>'ORDER_RUN DESC','conditions'=>array('USERID' => $id)));
        $this->set("userofrun", $rs);
        $this->set('userinfo', $this->Userinfo->read(null, $id));
    }
    public function add($id = null){
        $errors = array();
        App::uses('Userofrun', 'Turno.Model');
        $userofrun = new Userofrun();
            if ($this->request->is('post')) {
                try{
                    $userofrun->create();
                    if ($userofrun->save($this->request->data)) {
                            $this->Cookie->delete('srcPassArg');
                            $this->redirect(array('action' => 'general/'.$id));
                    }else {
                            $errors = $userofrun->validationErrors;
                    }
                }catch(Exception $sql){
                    $errors[] = array(0=>str_replace('SQLSTATE[42000]: [Microsoft][SQL Server Native Client 11.0][SQL Server]','',$sql->getMessage())." <b>".$this->data['Numrun']['NAME']."</b>");
                }
            }
         $dato=$userofrun->find('all',array('order'=>'ORDER_RUN DESC','conditions'=>array('USERID' => $id)));
        $this->set('num',sizeof($dato));
        $this->set('errors',$errors);
        $this->set("iduser", $id);
        $this->set('userinfo', $this->Userinfo->read(null, $id));
    }
    public function horario($id = null){
        $this->set("id", $id);
        //$this->autoRender = false;
        $var = 'valor retornado.';
         App::uses('Numrundeil', 'Article.Model');
         App::uses('Numrun', 'Article.Model');
        $deiles = new Numrundeil();
        $userModel = new Numrun();
        $rs = $deiles->find('all',array('conditions'=>array('NUM_RUNID' => $id)));
        $this->set("deil", $rs);
        $this->set('numruns', $userModel->find('all',array('conditions'=>array('NUM_RUNID' => $id))));
       //return $var;
    }
    public function temporal($id = null){
         $this->Userinfo->id = $id;
         $errors = array();
        if (!$this->Userinfo->exists()) {
                throw new NotFoundException(__('Usuario Invalido'));
        }
        if ($this->request->is('post') && !empty($this->request->data['Rolturno']['dHorario'])) {
                App::uses('Schcla', 'Article.Model');
                $schcla= new Schcla();
                $dao=array();
                $ffi=$this->request->data['Rolturno']['STARTDATE'];
                $fff=$this->request->data['Rolturno']['ENDDATE'];
                $uid=$this->request->data['Rolturno']['USERID'];
                $sch_d=$schcla->find('first',array('conditions'=>array('SCHCLASSID' => $this->request->data['Rolturno']['dHorario'])));
                while($ffi <= $fff){
                    if(!empty($this->request->data[$ffi])){
                        $f1='';$f2='';
                        try{
                            $this->Usertempsch->USERID = $uid;
                            if(substr($sch_d['Schcla']['STARTTIME'],11) > substr($sch_d['Schcla']['ENDTIME'],11)){
                                $ffi1 = date ("Y-m-d",strtotime ('+1 day',strtotime($ffi)));
                                $dao[]=  $ffi.' '.substr($sch_d['Schcla']['STARTTIME'],11).' a '.$ffi1.' '.substr($sch_d['Schcla']['ENDTIME'],11);
                                $f1 = $ffi.' '.substr($sch_d['Schcla']['STARTTIME'],11);
                                $f2 = $ffi1.' '.substr($sch_d['Schcla']['ENDTIME'],11);
                            }else{
                                $dao[]=  $ffi.' '.substr($sch_d['Schcla']['STARTTIME'],11).' a '.$ffi.' '.substr($sch_d['Schcla']['ENDTIME'],11);
                                $f1 = $ffi.' '.substr($sch_d['Schcla']['STARTTIME'],11);
                                $f2 = $ffi.' '.substr($sch_d['Schcla']['ENDTIME'],11);
                            }
                            $data = array('USERID' => $uid, 'COMETIME' => $f1,'LEAVETIME'=>$f2,'OVERTIME'=>0,'TYPE'=>0,'FLAG'=>1,'SCHCLASSID'=>$this->request->data['Rolturno']['dHorario']);
                            $this->Usertempsch->create();
                            if(!$this->Usertempsch->save($data)){
                            }
                        }catch(Exception $sql){
                            
                            $errors[] = array(0=>str_replace('SQLSTATE[23000]: [Microsoft][SQL Server Native Client 11.0][SQL Server]','',$sql->getMessage())." <b>".$this->request->data['Rolturno']['STARTDATE']."</b>");
                        }
                    }
                    $ffi = date ("Y-m-d",strtotime ('+1 day',strtotime($ffi)));
                }
                $this->set('errors',$errors);
                $this->set('uid',$uid);
                $this->set('fia1','Datos guardados correctamente.');
                $this->redirect(array('action' => 'view1/'.$id));
        }
        $this->set("id", $id);
        App::uses('Userofrun', 'Turno.Model');
        $urun = new Userofrun();
        $rs = $urun->find('all',array('order'=>'ORDER_RUN DESC','conditions'=>array('USERID' => $id)));
        $this->set("userofrun", $rs);
        $this->set('userinfo', $this->Userinfo->read(null, $id));
    }
    public function eliminar($id = null){
        $this->Userinfo->id = $id;
        if (!$this->Userinfo->exists()) {
                throw new NotFoundException(__('Usuario Inválido'));
        }
        App::uses('Usertempsch', 'Turno.Model');
        $urun = new Usertempsch();
        $rs = $urun->find('all',array('order'=>'COMETIME ASC','conditions'=>array('SCHCLASSID != '=>-1,'USERID' => $id)));
        $this->set("usertempsch", $rs);
        $this->set("id", $id);
        $this->set('userinfo', $this->Userinfo->read(null, $id));
    }
    public function delete($idusr,$iden){
        $this->autoRender = false;
        $this->Usertempsch->id = $iden;
        if (!$this->Usertempsch->exists()) {
                throw new NotFoundException(__('Registro inválido'));
        }
        if ($this->Usertempsch->delete()) {
                //$this->Session->setFlash(__('Userinfo deleted'));
                $this->redirect(array('action' => 'eliminar/'.$idusr));
        }
    }
     public function individual($id = null){
         $this->Userinfo->id = $id;
         $errors = array();
        if (!$this->Userinfo->exists()) {
                throw new NotFoundException(__('Usuario Invalido'));
        }
        if ($this->request->is('post') && !empty($this->request->data['Rolturno']['dHorario'])) {
                App::uses('Schcla', 'Article.Model');
                $schcla= new Schcla();
                $ffi=$this->request->data['Rolturno']['STARTDATE'];
                $fff=$this->request->data['Rolturno']['ENDDATE'];
                $uid=$this->request->data['Rolturno']['USERID'];
                $sch_d=$schcla->find('first',array('conditions'=>array('SCHCLASSID' => $this->request->data['Rolturno']['dHorario'])));
                try{
                    while($ffi <= $fff){
                        if(!empty($this->request->data[$ffi])){
                            $f1='';$f2='';

                                $this->Usertempsch->USERID = $uid;
                                $f1 = $ffi.' '.substr($sch_d['Schcla']['STARTTIME'],11);
                                $f2 = $ffi.' '.substr($sch_d['Schcla']['ENDTIME'],11);
                                $data = array('USERID' => $uid, 'COMETIME' => $f1,'LEAVETIME'=>$f2,'OVERTIME'=>0,'TYPE'=>0,'FLAG'=>1,'SCHCLASSID'=>$this->request->data['Rolturno']['dHorario']);
                                $this->Usertempsch->create();
                                if(!$this->Usertempsch->save($data)){
                                }
                        }
                        $ffi = date ("Y-m-d",strtotime ('+1 day',strtotime($ffi)));
                    }
                    $this->redirect(array('action' => 'view/'.$id));
                }catch(Exception $sql){
                    $errors[] = array(0=>str_replace('SQLSTATE[23000]: [Microsoft][SQL Server Native Client 11.0][SQL Server]','',$sql->getMessage())." <b>".$this->request->data['Rolturno']['STARTDATE']."</b>");
                }
                $this->set('errors',$errors);
                $this->set('uid',$uid);
                $this->set('fia1','Datos guardados correctamente.');
                
                
        }
        $this->set("id", $id);
        App::uses('Userofrun', 'Turno.Model');
        $urun = new Userofrun();
        $rs = $urun->find('all',array('order'=>'ORDER_RUN DESC','conditions'=>array('USERID' => $id)));
        $this->set("userofrun", $rs);
        $this->set('userinfo', $this->Userinfo->read(null, $id));
    }
    public function hraturno($fi,$ff){
        $this->set("fi", $fi);
        $this->set("ff", $ff);
        /*
         App::uses('Numrundeil', 'Article.Model');
         App::uses('Numrun', 'Article.Model');
        $deiles = new Numrundeil();
        $userModel = new Numrun();
        $rs = $deiles->find('all',array('conditions'=>array('NUM_RUNID' => $id)));
        $this->set("deil", $rs);
        $this->set('numruns', $userModel->find('all',array('conditions'=>array('NUM_RUNID' => $id))));
       */
    }
    public function autoComplete() {
        $this->autoRender = false;
        App::uses('Schcla', 'Article.Model');
        $schcla = new Schcla();
        $schcla1 = $schcla->find('all', array(
            'conditions' => array('SensorID LIKE' => '%'.$_GET['term'].'%')));
        echo json_encode($this->encode($schcla1));
    }
    public function encode($postData) {
        $temp = array();
        foreach ($postData as $user) {
            array_push($temp, array(
            'id' => $user['Schcla']['SCHCLASSID'],
            'label' => $user['Schcla']['SensorID'].' '.substr($user['Schcla']['STARTTIME'],11,5).' a '.substr($user['Schcla']['ENDTIME'],11,5),
            'value' => $user['Schcla']['SensorID'].' '.substr($user['Schcla']['STARTTIME'],11,5).' a '.substr($user['Schcla']['ENDTIME'],11,5),
            ));
        }
        return $temp;
    }
}
