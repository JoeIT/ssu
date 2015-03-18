<?php
App::uses('FileAppController', 'File.Controller');

class EmployeesController extends FileAppController {
	public $helpers = array('Html', 'Form');

    public function index()
    {
        $this->Session->write('currentEmployeeID', '');
        $this->set('DIGITAL_DOCS_PATH', $this->DIGITAL_DOCS_PATH);
        $this->set('GENDER', $this->GENDER);
        $this->set('PROFILE', $this->PROFILE);
        $this->set('PROFESSIONAL_DEGREE', $this->PROFESSIONAL_DEGREE);
        $this->set('CERTIFICATE_PROVISION', $this->CERTIFICATE_PROVISION);

        $birthdayEmployees = $this->Employee->getDailyBirthdays();
        $this->set(compact('birthdayEmployees'));

        $newlyRegistered = $this->Employee->listOrderByDate(5);
        $this->set(compact('newlyRegistered'));

        $notHired = $this->Employee->notHired();
        $this->set(compact('notHired'));
        //print_r($notHired);
    }

    public function panels()
    {}

    public function edit($id = null) {
        $this->set('GLOBAL_DOCS', $this->GLOBAL_DOCS);
        $this->set('GLOBAL_TAGS', $this->GLOBAL_TAGS);
        $this->set('DIGITAL_DOCS_PATH', $this->DIGITAL_DOCS_PATH);
        $this->set('GENDER', $this->GENDER);
        $this->set('PROFILE', $this->PROFILE);
        $this->set('PROFESSIONAL_DEGREE', $this->PROFESSIONAL_DEGREE);

        //if(!$id) throw  new  NotFoundException(__('Id de empleado vacio'));
        //if(!$employee) throw new NotFoundException(__('Empleado no encontrado'));

        $lastCode = '';

        if($id != null)
        {
            $employee = $this->Employee->findById($id);
            $lastCode = $employee['Employee']['code'];

            // Stores the employee id that is current selected to be edited
            $this->Session->write('currentEmployeeID', $id);
        }

        if($this->request->is(array('post', 'put')))
		{
			if($id != null)
                $this->Employee->id = $id;
            else {
                $this->Employee->create();
                date_default_timezone_set('America/La_Paz');
                $this->request->data['Employee']['registred_datetime'] = date('Y-m-d H:i:s');
            }

            // Rebuilding the code
            $name = substr($this->request->data['Employee']['name'], 0, 1);
            $paternal = substr($this->request->data['Employee']['paternal_surname'], 0, 1);
            $maternal = substr($this->request->data['Employee']['maternal_surname'], 0, 1);
            $year = substr($this->request->data['Employee']['born_date']['year'], 2, 2);

            $this->request->data['Employee']['code'] = strtoupper($paternal
                                                    . $maternal
                                                    . $name
                                                    . $year
                                                    . $this->request->data['Employee']['born_date']['month']
                                                    . $this->request->data['Employee']['born_date']['day']);

            $this->request->data['Employee']['name'] = strtoupper($this->request->data['Employee']['name']);
            $this->request->data['Employee']['paternal_surname'] = strtoupper($this->request->data['Employee']['paternal_surname']);
            $this->request->data['Employee']['maternal_surname'] = strtoupper($this->request->data['Employee']['maternal_surname']);
            $this->request->data['Employee']['ci'] = strtoupper($this->request->data['Employee']['ci']);

            //$this->Employee->set( $this->request->data['Employee'] );
            if($this->Employee->validates())
            {
                if($this->Employee->save($this->request->data))
                {
                    $newPathCode = $this->DIGITAL_DOCS_PATH . $this->request->data['Employee']['code'];

                    if(empty($lastCode))
                        $dir = new Folder($newPathCode, true);

                    if(!empty($lastCode) && $lastCode != $this->request->data['Employee']['code'])
                        rename(
                            $this->DIGITAL_DOCS_PATH . $lastCode,
                            $newPathCode
                        );

                    if(!empty($this->data['Employee']['profile_photo']['tmp_name']))
                    {
                        move_uploaded_file(
                            $this->data['Employee']['profile_photo']['tmp_name'],
                            $newPathCode . '/profile_photo.jpg'
                        );
                    }

                    $this->Session->setFlash(__('La información guardada exitosamente.'));
                    //return $this->redirect(array('action' => 'index'));
                    return $this->redirect(array('action' => 'edit/' . $this->Employee->id));
                }

                $this->Session->setFlash(__('No se pudo guardar la información del empleado.'));
            }
		}
		
		if(!$this->request->data['Employee'])
			$this->request->data  =  $employee;
		
		//$userinfo = $this->Userinfo->find('first', array('conditions' => array('USERID' => $id)));
		//$this->set('userinfoView', $userinfo['Userinfo']);
		
		//$this->Employee->id = $id;
		//if (!$this->Employee->exists()) throw new NotFoundException(__('Usuario Inválido'));
		//print_r( $this->Employee );
		
		
		//$employee = $this->Employee->find('first', array('conditions' => array('id' => $id)));
		//$employee = $this->Employee->findById($id);
		
		//$employee = $this->Employee->findAll();
		//$this->set('employee', $employee['Employee']);
		//print_r($employee);
		//echo "My name= " . $employee['Employee']['name'];
		
		//echo "Name: ". $userinfo['Userinfo']['Name'];
		
		//print_r($userinfo);
	}

    public function search()
    {
        $this->layout = false;

        $lastName = $this->request->data('lastName');
        $name = $this->request->data('name');
        $code = $this->request->data('code');
        $ci = $this->request->data('ci');
        $gender = $this->request->data('gender');
        $profile = $this->request->data('profile');
        $degree = $this->request->data('degree');
        $certificate = $this->request->data('certificate');

        $result = $this->Employee->search($name, $lastName, $code, $ci, $gender, $profile, $degree, $certificate);
        $this->set(compact('result'));
        $this->set('GENDER', $this->GENDER);
        $this->set('PROFILE', $this->PROFILE);
        $this->set('PROFESSIONAL_DEGREE', $this->PROFESSIONAL_DEGREE);
        $this->set('CERTIFICATE_PROVISION', $this->CERTIFICATE_PROVISION);
    }
}
