<?php
App::uses('FileAppController', 'File.Controller');

class StatementsController extends FileAppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->layout = false;
        $this->set('statementsList', $this->Statement->find('all'));
    }

    public function ajaxadd() {
        $this->layout = false;

        $this->set('saved', false);

        if($this->request->is('Post'))
        {
            $this->Statement->create();
            if($this->Statement->save($this->request->data))
            {
                $this->set('saved', true);
            }
        }
    }
}