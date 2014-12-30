<?php

App::uses('FileAppController',  'File.Controller');

class RecordsController extends FileAppController
{
    //public $uses = array('File.Record','File.Employee');
    public $helpers = array('Html', 'Form');

    public function index()
    {
        $this->layout = false;

        /*
        $employe = $this->Employee;
        $aux  = $employe->find('first', array('conditions' => array('id' => $this->Session->read('currentEmployeeID'))));
        //$employe = $this->Employee->find('first', array('conditions' => array('id' => 1)));
        $this->set('employes',$aux);*/

        $r = $this->Record->find('threaded', array('conditions' => array('employee_id' => $this->Session->read('currentEmployeeID'))));

        $this->set('recordsList', $this->Record->findByEmployee( $this->Session->read('currentEmployeeID') ));
        $this->set('profile', $r[0]['Employee']['profile']);
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