<?php
App::uses('FileAppController', 'File.Controller');

class MemosController extends FileAppController
{
    public function index()
    {
        $this->layout = false;

        $this->set('memosList', $this->Memo->findByEmployee( $this->Session->read('currentEmployeeID') ));
    }

    // This is an ajax action
    public function add($id = null)
    {
        $this->layout = false;

        if($id != null)
            $memo = $this->Memo->findById($id);

        $this->set('saved', false);

        if($this->request->is(array('post', 'put')))
        {
            if($id != null)
                $this->Memo->id = $id;
            else
                $this->Memo->create();

            $this->request->data['Memo']['employee_id'] = $this->Session->read('currentEmployeeID');
            $this->request->data['Memo']['registred_datetime'] = '';

            if($this->Memo->validates())
            {
                if($this->Memo->save($this->request->data))
                    $this->set('saved', true);
                else
                    $this->set('errorMessage', 'NOTA: Ocurrió un problema al guardar la información!!');
            }
        }

        if (!$this->request->data['Memo'])
            $this->request->data  = $memo;
    }

    // This is an ajax action
    public function delete($id = null)
    {
        $this->layout = false;

        $memo = $this->Memo->findById($id);

        $this->set(compact('memo'));
        $this->set('deleted', false);

        if($this->request->is(array('post')))
        {
            if($this->Memo->delete($id))
                $this->set('deleted', true);
            else
                $this->set('errorMessage', 'NOTA: Ocurrió un problema al borrar la información!!');
        }
    }
}