<?php
App::uses('TurnoAppController', 'Turno.Controller');
/**
 * Categories Controller
 *
 * @property Userinfo $Userinfo
*/
class MarcacionesController extends TurnoAppController {
    public $uses = array('Article.Userinfo','Turno.Checkinout');
    var $components = array('RequestHandler');
    public function index() {
    }
    public function marcacion($fi,$ff,$id) {
        $this->set("fi", $fi);
        $this->set("ff", $ff);
        $this->set("id", $id);
        $userinfo = $this->Userinfo->find('first', array('conditions' => array('USERID' => $id)));
        $this->set('userinfo',$userinfo);
        App::uses('Checkinout', 'Turno.Model');
        $checkin = new Checkinout();
        $checkout= $checkin->find('all',array('order'=>'CHECKTIME ASC','conditions'=>array('USERID' => $id,'CHECKTIME BETWEEN ? AND ?'=>array($fi,$ff))));
        $this->set("checkinout", $checkout);
        
    }
    public function add(){
        $this->autoRender = false;
        $var = array();
        if ($this->request->is('post') && $this->request->isAjax()) {
                $this->Checkinout->create();
                if ($this->Checkinout->save($this->request->data)) {
                        $var['error'] = 0;
                }else{
                        $var['error'] = 1;
                        $errors = $this->Checkinout->validationErrors;
                        $var['error_message'] = implode('<br />', $errors['name']);
                }
        }
        echo json_encode($var);
    }

    public function autoComplete() {
        $this->autoRender = false;
        $userinfo = $this->Userinfo->find('all', array(
            'conditions' => array('Name LIKE' => '%'.$_GET['term'].'%')));
        echo json_encode($this->encode($userinfo));
    }
    private function encode($postData) {
        $temp = array();
        foreach ($postData as $user) {
            array_push($temp, array(
            'id' => $user['Userinfo']['USERID'],
            'label' => $user['Userinfo']['Name'],
            'value' => $user['Userinfo']['Name'],
            ));
        }
        return $temp;
    }
}
