<?php
echo  $this->Form->create('Statement');
echo  $this->Form->input('name', array('label' => 'Nombre'));
echo  $this->Form->input('description', array('label' => 'Descripción', 'rows' => '3'));

echo $this->Js->submit('Guardar', array(  //create ajax submit button
    'update' => '#dialog_content'
));

if($saved == true)
{
    echo "<script>
            loadStatementsPanel();
            $('#dialog_content').dialog('close');  //close containing dialog
        </script>";
}

echo  $this->Form->end();
echo $this->Js->writeBuffer();
?>