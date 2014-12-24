<?php

App::uses('FileAppController',  'File.Controller');

class VacationsController extends FileAppController
{
    public $helpers = array('Html', 'Form');

    public function index()
    {
        $this->layout = false;

        $this->set('vacationsList', $this->Vacation->findByEmployee( $this->Session->read('currentEmployeeID') ));
    }

    // This is an ajax action
    public function add($id = null)
    {
        $this->layout = false;

        if($id != null)
            $vacation = $this->Vacation->findById($id);

        $this->set('saved', false);

        if($this->request->is(array('post', 'put')))
        {
            if($id != null)
                $this->Vacation->id = $id;
            else
                $this->Vacation->create();

            $this->request->data['Vacation']['employee_id'] = $this->Session->read('currentEmployeeID');
            $this->request->data['Vacation']['registred_datetime'] = '';

            if($this->Vacation->validates())
            {
                if($this->Vacation->save($this->request->data))
                    $this->set('saved', true);
                else
                    $this->set('errorMessage', 'NOTA: Ocurrió un problema al guardar la información!!');
            }
        }

        if (!$this->request->data['Vacation'])
            $this->request->data  = $vacation;
    }

    // This is an ajax action
    public function delete($id = null)
    {
        $this->layout = false;

        $vacation = $this->Vacation->findById($id);

        $this->set(compact('vacation'));
        $this->set('deleted', false);

        if($this->request->is(array('post')))
        {
            if($this->Vacation->delete($id))
                $this->set('deleted', true);
            else
                $this->set('errorMessage', 'NOTA: Ocurrió un problema al borrar la información!!');
        }
    }
}