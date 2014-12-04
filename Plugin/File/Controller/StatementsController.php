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
        //$employees = $this->Statement->Employee->generateList();
        $employees = $this->Statement->Employee->find('list');
        //$this->set('employee_list', 'employees');
        $this->set(compact('employees'));

        if($this->request->is('Post'))
        {
            //$this->request->data['Statement']['employee_id'] = '1';
            //print_r($this->request->data);
            $this->Statement->create();
            if($this->Statement->save($this->request->data))
            {
                $this->set('saved', true);
            }
        }
    }
}