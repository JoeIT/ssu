<?php
App::uses('FileAppController', 'File.Controller');

class StatementsController extends FileAppController {
    public $helpers = array('Html', 'Form');

    public function index() {
        $this->layout = false;

        $this->set('statementsList', $this->Statement->findByEmployee( $this->Session->read('currentEmployeeID') ));
    }

    // This is an ajax action
    public function add($id = null) {
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
                $this->Statement->create();

            $this->request->data['Statement']['employee_id'] = $this->Session->read('currentEmployeeID');

            print_r($this->request->data);

            if($this->Statement->save($this->request->data))
                $this->set('saved', true);
            else
                $this->set('errorMessage', 'NOTA: Ocurrió un problema al guardar la información!!');
        }

        if (!$this->request->data['Statement'])
            $this->request->data  = $statement;
    }

    // This is an ajax action
    public function delete($id = null)
    {
        $this->layout = false;

        $statement = $this->Statement->findById($id);

        $this->set(compact('statement'));
        $this->set('deleted', false);

        if($this->request->is(array('post')))
        {
            if($this->Statement->delete($id))
                $this->set('deleted', true);
            else
                $this->set('errorMessage', 'NOTA: Ocurrió un problema al borrar la información!!');
        }
    }
}