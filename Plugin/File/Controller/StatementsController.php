<?php
App::uses('FileAppController', 'File.Controller');

class StatementsController extends FileAppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->layout = false;
        $this->set('statementsList', $this->Statement->find('all'));
    }

    public function add() {
    }
}