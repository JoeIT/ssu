<?php
App::uses('AsistenciaAppController', 'Asistencia.Controller');
/**
 * Categories Controller
 *
 * @property Userinfo $Userinfo
*/
class RegistrosController extends AsistenciaAppController {
    public $uses = array('Article.Userinfo','Turno.Checkinout','Asistencia.Userspeday');
    var $components = array('RequestHandler');
    public function index() {
        $userinfo = $this->Userinfo->find('all', array('order'=>'Name ASC','conditions' => array('ZIP' => 1)));
        $this->set('userinfos',$userinfo);
    }
    public function marcacion($fi,$ff,$id) {
        $this->set("fi", $fi);
        $this->set("ff", $ff);
        $this->set("id", $id);
        $userinfo = $this->Userinfo->find('first', array('conditions' => array('USERID' => $id)));
        $this->set('userinfo',$userinfo);
        App::uses('Checkinout', 'Turno.Model');
        $ff_1=date ("Y-m-d",strtotime ('+1 day',strtotime($ff)));
        $checkin = new Checkinout();
        $checkout= $checkin->find('all',array('order'=>'CHECKTIME ASC','conditions'=>array('USERID' => $id,'CHECKTIME BETWEEN ? AND ?'=>array($fi,$ff_1))));
        $this->set("checkinout", $checkout);
    }
    public function movimiento($fi,$ff,$id) {
        $this->set("fi", $fi);
        $this->set("ff", $ff);
        $this->set("id", $id);
        $userinfo = $this->Userinfo->find('first', array('conditions' => array('USERID' => $id)));
        $this->set('userinfo',$userinfo);
            
            App::uses('Userofrun', 'Turno.Model');
            $urun = new Userofrun();
            $rs = $urun->find('first',array('order'=>'ORDER_RUN DESC','conditions'=>array('USERID' => $id,"'$ff' BETWEEN STARTDATE AND ENDDATE")));
            $this->set("userofrun", $rs);
            
        App::uses('Checkinout', 'Turno.Model');
        $ff_1=date ("Y-m-d",strtotime ('+1 day',strtotime($ff)));
        $checkin = new Checkinout();
        $checkout= $checkin->find('all',array('order'=>'CHECKTIME ASC','conditions'=>array('USERID' => $id,'CHECKTIME BETWEEN ? AND ?'=>array($fi,$ff_1))));
        $this->set("checkinout", $checkout);
    }
    /*
     * Archivo Pdf para personal de Planta
     */
    public function viewpdf($fi,$ff,$id){
        $this->layout = 'pdf';
        $this->set("fi", $fi);
        $this->set("ff", $ff);
        $this->set("id", $id);
        $userinfo = $this->Userinfo->find('first', array('conditions' => array('USERID' => $id)));
        $this->set('userinfo',$userinfo);
                
        $this->render('pdf');
    }
    /*
     * Archivo Xls para personal de Planta
     */
    public function viewexcel($fi,$ff,$id){
        $this->layout = 'excel';
        $this->set("fi", $fi);
        $this->set("ff", $ff);
        $this->set("id", $id);
        $userinfo = $this->Userinfo->find('first', array('conditions' => array('USERID' => $id)));
        $this->set('userinfos',$userinfo);
        $this->render('excel');
    }
    /*
     * Archivo Xls para personal de contrato
     */
    public function contratoexcel($fi,$ff,$id){
        $this->layout = 'excel';
        $this->set("fi", $fi);
        $this->set("ff", $ff);
        $this->set("id", $id);
        $userinfo = $this->Userinfo->find('first', array('conditions' => array('USERID' => $id)));
        $this->set('userinfos',$userinfo);
        $this->render('cexcel');
    }
    //public function mantenimiento($id,$fi,$ff,$tp,$detalle){
    public function mantenimiento($id,$fi,$ff,$tp,$detalle){
        $this->autoRender = false;
        $var = array();
        if ($this->request->is('post') && $this->request->isAjax()) {
                $this->Userspeday->create();
                //$data=array('USERID'=>$id,'STARTSPECDAY'=>"$fi",'ENDSPECDAY'=>"$ff",'DATEID'=>$tp,'YUANYING'=>$det,'DATE'=>date('Y-m-d H:i:s'));
                if ($this->Userspeday->save($this->request->data)) {
                        $var['error'] = 0;
                } else {
                        $var['error'] = 1;
                        $errors = $this->Userspeday->validationErrors;
                        $var['error_message'] = implode('<br />', $errors['YUANYING']);
                }
        }else{
            $var['error_message'] = 'ffffffffffff';
        }
        echo json_encode($var);
    }
    public function delete($id = null) {
        $this->autoRender = false;
        if (!$this->request->is('post')) {
                throw new MethodNotAllowedException();
        }
        $this->Userspeday->id = $id;
        if (!$this->Userspeday->exists()) {
                throw new NotFoundException(__('Usuario Inválido'));
        }
        if ($this->Userspeday->delete()) {
                //$this->Session->setFlash(__('Schcla deleted'));
                //$this->redirect(array('action' => 'index'));
        }
    }
}
