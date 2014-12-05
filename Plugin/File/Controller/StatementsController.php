<?php
App::uses('FileAppController', 'File.Controller');

class StatementsController extends FileAppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->layout = false;
        $this->set('statementsList', $this->Statement->find('all'));
    }

    public function ajaxadd($id = null) {
        $this->layout = false;

        if($id != null)
            $statement = $this->Statement->findById($id);

        $this->set('saved', false);

        $employees = $this->Statement->Employee->find('list');
        $this->set(compact('employees'));

        if($this->request->is(array('post', 'put')))
        {
            if($id != null)
                $this->Statement->id = $id;
            else
            {
                $this->Statement->create();
                $this->request->data['Statement']['employee_id'] = '2'; // CHANCE, TO SAVE THE EMPLOYEE ID
            }

            if($this->Statement->save($this->request->data))
                $this->set('saved', true);
        }

        if (!$this->request->data['Statement'])
            $this->request->data  = $statement;
    }
}