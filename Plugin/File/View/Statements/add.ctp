<?php
// This is an ajax view
echo  $this->Form->create('Statement');
echo  $this->Form->input('name', array('label' => 'Nombre'));
//echo  $this->Form->input('employee_id', array('label' => 'Empleado'));
echo  $this->Form->input('id', array('type' => 'hidden'));
echo  $this->Form->input('description', array('label' => 'Descripción', 'rows' => '3'));

echo $this->Js->submit('GUARDAR', array(
    //Create ajax submit button
    'update' => '#dialog_content'
));

if($saved == true)
{
    echo "<script>
            loadIndexPanel('statements');
            $('#dialog_content').dialog('close');  //close containing dialog
        </script>";
}

echo  $this->Form->end();
echo $this->Js->writeBuffer();

?>

<div class="error-message">
    <p><?php echo $errorMessage; ?></p>
</div>