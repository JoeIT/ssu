<?php
App::uses('AsistenciaAppController', 'Asistencia.Controller');
/**
 * Categories Controller
 *
 * @property Userinfo $Userinfo
*/
class ReportesController extends AsistenciaAppController {
    public $uses = array('Article.Userinfo','Turno.Checkinout','Asistencia.Userspeday');
    var $components = array('RequestHandler');
    public function index() {
        $userinfo = $this->Userinfo->find('all', array('order'=>'Name ASC','conditions' => array('ZIP' => 1)));
        $this->set('userinfos',$userinfo);
    }
    public function reporteplanta($fi,$ff,$id) {
        $this->set("fi", $fi);
        $this->set("ff", $ff);
        $this->set("id", $id);
        $userinfo = $this->Userinfo->find('all', array('order'=>'Name ASC','conditions' => array('FPHONE' => $id,'ZIP'=>1)));
        $this->set('userinfos',$userinfo);
    }
    public function reportecontrato($fi,$ff,$id) {
        $this->set("fi", $fi);
        $this->set("ff", $ff);
        $this->set("id", $id);
        $userinfo = $this->Userinfo->find('all', array('order'=>'Name ASC','conditions' => array('FPHONE' => $id,'ZIP'=>1)));
        $this->set('userinfos',$userinfo);
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
    public function viewpdf($fi,$ff,$id){
        $this->layout = 'pdf';
        $this->set("fi", $fi);
        $this->set("ff", $ff);
        $this->set("id", $id);
        $userinfo = $this->Userinfo->find('all', array('order'=>'Name ASC','conditions' => array('FPHONE' => $id,'ZIP'=>1)));
        $this->set('userinfos',$userinfo);
        $this->render('pdf');
    }
    /*
     * Archivo Pdf para personal de Contrato
     */
    public function contratopdf($fi,$ff,$id){
        $this->layout = 'pdf';
        $this->set("fi", $fi);
        $this->set("ff", $ff);
        $this->set("id", $id);
        $userinfo = $this->Userinfo->find('all', array('order'=>'Name ASC','conditions' => array('FPHONE' => $id,'ZIP'=>1)));
        $this->set('userinfos',$userinfo);
        $this->render('cpdf');
    }
}
