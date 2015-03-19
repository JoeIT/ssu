<?php
$this->extend('/Employees/panels');
$this->start('employee_info');

echo $this->Form->create('Employee', array('type' => 'file'));

$photo = 'File.default/Test_no_avatar.jpg';
$file_path =  $this->request->data['Employee']['code'] . '/profile_photo.jpg';
if(file_exists($DIGITAL_DOCS_PATH . $file_path))
    $photo = 'File.PERSONAL/'. $file_path;

echo $this->Html->image($photo, array("alt" => "Fotografía perfil", "id" => "profile_image", "class" => "css-img_center", "width" => "200px"));
echo '</br></br>';

echo $this->Form->file('profile_photo', array('label' => 'Fotografía'));

echo $this->Form->input('name', array('label' => 'Nombre (*)', 'class' => 'code_build_name'));
echo $this->Form->input('paternal_surname', array('label' => 'Apellido paterno (*)', 'class' => 'code_build_name'));
echo $this->Form->input('maternal_surname', array('label' => 'Apellido materno (*)', 'class' => 'code_build_name'));

echo '<label>Código</label>';
echo '<label id="code_label" style="color: black;">'. $this->request->data['Employee']['code'] .'</label>';

echo $this->Form->input('born_date', array('type' => 'date', 'label' => 'Fecha de nacimiento', 'dateFormat' => 'DMY', 'class' => 'css-date_area code_build_date', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('born_country', array('label' => 'País de procedencia (*)'));
echo $this->Form->input('born_city', array('label' => 'Ciudad de procedencia (*)'));
echo $this->Form->input('ci', array('label' => 'Carnet identidad (*)'));
echo $this->Form->input('gender', array('label' => 'Género', 'options' => $GENDER));
echo $this->Form->input('profile', array('label' => 'Perfíl', 'options' => $PROFILE));
echo $this->Form->input('professional_degree', array('label' => 'Grado profesional', 'options' => $PROFESSIONAL_DEGREE));

echo $this->Form->input('address', array('label' => 'Dirección'));
echo $this->Form->input('phone', array('label' => 'Teléfono', 'maxlength' => '8'));
echo $this->Form->input('email', array('label' => 'Correo electrónico'));
echo $this->Form->input('id',  array('type'  =>  'hidden'));
echo $this->Form->end('GUARDAR');

$this->end();
?>