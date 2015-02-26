<?php
$this->extend('/Employees/panels');
$this->start('employee_info');

echo $this->Form->create('Employee', array('type' => 'file'));

$photo = 'File.Test_no_avatar.jpg';

$folder = new Folder(ROOT);
echo 'TEST: ' . $folder->inPath('File');
//echo 'TEST: ' . $folder->path;


$file_path = $DIGITAL_DOCS_PATH .  DS . $this->request->data['Employee']['code'] . DS . 'profile_photo.jpg';

//'/useraclSQL/file/img/Test_no_avatar.jpg'

//$photo = $file_path;
//echo "</br>FILE: $file_path";

/*
echo '</br>PATH: ' . IMAGES . 'algo.jpg';
echo '</br>PATH: ' . TMP;
echo '</br>PATH: ' . WEBROOT_DIR;
echo '</br>PATH: ' . ROOT;
echo '</br>PATH: ' . $this->webroot;
echo '</br>PATH: ' . Router::fullbaseUrl();
echo '</br>PATH: ' . $html->webroot;

if(!file_exists($file_path)) {
    $photo = $file_path;
}
else{
    echo "</br>NO FOTOOOO!!!";
}
*/

echo $this->Html->image($photo, array("alt" => "Fotografía perfil", "id" => "profile_image", "class" => "css-img_center"));
echo '</br></br>';

echo $this->Form->file('profile_photo', array('label' => 'Fotografía'));

echo $this->Form->input('name', array('label' => 'Nombre (*)', 'class' => 'code_build_name'));
echo $this->Form->input('paternal_surname', array('label' => 'Apellido paterno (*)', 'class' => 'code_build_name'));
echo $this->Form->input('maternal_surname', array('label' => 'Apellido materno (*)', 'class' => 'code_build_name'));

echo '<label>Código</label>';
echo '<label id="code_label" style="color: black;">'. $this->request->data['Employee']['code'] .'</label>';

echo $this->Form->input('born_date', array('type' => 'date', 'label' => 'Fecha de nacimiento', 'dateFormat' => 'DMY', 'class' => 'css-date_area code_build_date', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('born_country', array('label' => 'País de procedencia'));
echo $this->Form->input('born_city', array('label' => 'Ciudad de procedencia'));
echo $this->Form->input('ci', array('label' => 'Carnet identidad (*)'));
echo $this->Form->input('gender', array('label' => 'Género', 'options' => array('m' => 'Masculino', 'f' => 'Femenino')));
echo $this->Form->input('profile', array('label' => 'Perfíl', 'options' => array('a' => 'Administrativo', 's' => 'Salud', 'g' => 'Servicios de apoyo/generales')));

echo $this->Form->input('address', array('label' => 'Dirección'));
echo $this->Form->input('phone', array('label' => 'Teléfono', 'maxlength' => '8'));
echo $this->Form->input('email', array('label' => 'Correo electrónico'));
echo $this->Form->input('id',  array('type'  =>  'hidden'));
echo $this->Form->end('GUARDAR');

$this->end();
?>