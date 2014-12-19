<?php

App::uses('FileAppController',  'File.Controller');

class PersonalEducationController extends FileAppController
{
    public $helpers = array('Html', 'Form');

    public function index()
    {
        $this->layout = false;

        $this->set('personalEducationList', $this->PersonalEducation->findByEmployee( $this->Session->read('currentEmployeeID') ));
    }

    // This is an ajax action
    public function add($id = null)
    {
        $this->layout = false;

        if($id != null)
            $personalEducation = $this->PersonalEducation->findById($id);

        $this->set('saved', false);

        if($this->request->is(array('post', 'put')))
        {
            if($id != null)
                $this->PersonalEducation->id = $id;
            else
                $this->PersonalEducation->create();

            $this->request->data['PersonalEducation']['employee_id'] = $this->Session->read('currentEmployeeID');
            $this->request->data['PersonalEducation']['registred_datetime'] = '';

            if($this->PersonalEducation->validates())
            {
                if($this->PersonalEducation->save($this->request->data))
                    $this->set('saved', true);
                else
                    $this->set('errorMessage', 'NOTA: Ocurrió un problema al guardar la información!!');
            }
        }

        if (!$this->request->data['PersonalEducation'])
            $this->request->data  = $personalEducation;
    }

    // This is an ajax action
    public function delete($id = null)
    {
        $this->layout = false;

        $personalEducation = $this->PersonalEducation->findById($id);

        $this->set(compact('personalEducation'));
        $this->set('deleted', false);

        if($this->request->is(array('post')))
        {
            if($this->PersonalEducation->delete($id))
                $this->set('deleted', true);
            else
                $this->set('errorMessage', 'NOTA: Ocurrió un problema al borrar la información!!');
        }
    }
}