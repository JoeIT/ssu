<?php
App::uses('FileAppController', 'File.Controller');

class PersonalEducationController extends FileAppController
{
    public $helper = array('Html', 'Form');

    public function index()
    {
        //$this->layout = false;
        //$this->set('personalEducationList', $this->PersonalEducation->find('all'));
    }
}