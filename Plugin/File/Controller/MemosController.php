<?php
App::uses('FileAppController', 'File.Controller');

class MemosController extends FileAppController
{
    public $helper = array('Html', 'Form');

    public function index()
    {
        $this->layout = false;
        $this->set('memosList', $this->Memo->find('all'));
    }

    public function view($id)
    {
        $id = 1;
        if  (!$id) throw  new  NotFoundException(__('Memorandum no válido'));

        $memo  =  $this->Memo->findById($id);
        if  (!$memo)  {
            throw  new  NotFoundException(__('Memorandum no válido'));
}
        $this->set('memo',  $memo);
    }

    public function add()
    {
    }

    public function edit()
    {
    }

    public function remove()
    {
    }
}