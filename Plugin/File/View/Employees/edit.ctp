<?php
$this->extend('/Employees/panels');
$this->start('employee_info');

echo  $this->Form->create('Employee');
echo  $this->Form->input('name', array('label' => 'Nombre'));
echo  $this->Form->input('paternal_surname', array('label' => 'Apellido paterno'));
echo  $this->Form->input('maternal_surname', array('label' => 'Apellido materno'));
echo  $this->Form->input('born_date', array('type' => 'date', 'label' => 'Fecha de nacimiento', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo  $this->Form->input('born_country', array('label' => 'País de procedencia'));
echo  $this->Form->input('born_city', array('label' => 'Ciudad de procedencia'));
echo  $this->Form->input('ci', array('label' => 'Carnet identidad'));
echo  $this->Form->input('gender', array('label' => 'Género', 'options' => array('m' => 'Masculino', 'f' => 'Femenino')));
echo  $this->Form->input('profile', array('label' => 'Perfíl', 'options' => array('a' => 'Administrativo', 's' => 'Salud', 'g' => 'Servicios de apoyo/generales')));

echo  $this->Form->input('address', array('label' => 'Dirección'));
echo  $this->Form->input('phone', array('label' => 'Teléfono'));
echo  $this->Form->input('email', array('label' => 'Correo electrónico'));
echo  $this->Form->input('id',  array('type'  =>  'hidden'));
echo  $this->Form->end('GUARDAR');

$this->end();
?>