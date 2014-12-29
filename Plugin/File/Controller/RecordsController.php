<?php

App::uses('FileAppController',  'File.Controller');

class RecordsController extends FileAppController
{
    //var $uses = array('File.Employee');
    public $helpers = array('Html', 'Form');

    public function index()
    {
        $this->layout = false;

        //$this->loadModel('File.Employee');

        /*App::uses('Employee', 'File.Model');
        $emp = new Employee();
        $employee = $emp->findById( $this->Session->read('currentEmployeeID') );
        */

        //$emp = $this->Employee->find('all');
        //$this->Employee->findById( $this->Session->read('currentEmployeeID') );

        //print_r($emp);

        $this->set('recordsList', $this->Record->findByEmployee( $this->Session->read('currentEmployeeID') ));
        //$this->set('profile', );
    }

    // This is an ajax action
    public function add($id = null)
    {
        $this->layout = false;

        if($id != null)
            $record = $this->Record->findById($id);

        $this->set('saved', false);

        if($this->request->is(array('post', 'put')))
        {
            if($id != null)
                $this->Record->id = $id;
            else
                $this->Record->create();

            $this->request->data['Record']['employee_id'] = $this->Session->read('currentEmployeeID');
            $this->request->data['Record']['registred_datetime'] = '';

            if($this->Record->validates())
            {
                if($this->Record->save($this->request->data))
                    $this->set('saved', true);
                else
                    $this->set('errorMessage', 'NOTA: Ocurrió un problema al guardar la información!!');
            }
        }

        if (!$this->request->data['Record'])
            $this->request->data  = $record;
    }

    // This is an ajax action
    public function delete($id = null)
    {
        $this->layout = false;

        $record = $this->Record->findById($id);

        $this->set(compact('record'));
        $this->set('deleted', false);

        if($this->request->is(array('post')))
        {
            if($this->Record->delete($id))
                $this->set('deleted', true);
            else
                $this->set('errorMessage', 'NOTA: Ocurrió un problema al borrar la información!!');
        }
    }
}