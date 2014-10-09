
<?php
echo  $this->Form->create('Statement', array('target' => '_parent'));
echo  $this->Form->input('name', array('label' => 'Nombre'));
echo  $this->Form->input('description', array('label' => 'Descripción', 'rows' => '3'));
echo  $this->Form->end('Guardar');
?>