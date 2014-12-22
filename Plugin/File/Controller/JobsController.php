<?php

App::uses('FileAppController',  'File.Controller');

class JobsController extends FileAppController
{
    public $helpers = array('Html', 'Form');

    public function index()
    {
        $this->layout = false;

        $this->set('jobsList', $this->Job->findByEmployee( $this->Session->read('currentEmployeeID') ));
    }

    // This is an ajax action
    public function add($id = null)
    {
        $this->layout = false;

        if($id != null)
            $job = $this->Job->findById($id);

        $this->set('saved', false);

        if($this->request->is(array('post', 'put')))
        {
            if($id != null)
                $this->Job->id = $id;
            else
                $this->Job->create();

            $this->request->data['Job']['employee_id'] = $this->Session->read('currentEmployeeID');
            //$this->request->data['Job']['registred_datetime'] = '';

            if($this->Job->validates())
            {
                if($this->Job->save($this->request->data))
                    $this->set('saved', true);
                else
                    $this->set('errorMessage', 'NOTA: Ocurrió un problema al guardar la información!!');
            }
        }

        if (!$this->request->data['Job'])
            $this->request->data  = $job;
    }

    // This is an ajax action
    public function delete($id = null)
    {
        $this->layout = false;

        $job = $this->Job->findById($id);

        $this->set(compact('job'));
        $this->set('deleted', false);

        if($this->request->is(array('post')))
        {
            if($this->Job->delete($id))
                $this->set('deleted', true);
            else
                $this->set('errorMessage', 'NOTA: Ocurrió un problema al borrar la información!!');
        }
    }
}