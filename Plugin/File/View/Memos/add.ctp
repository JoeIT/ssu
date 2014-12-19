<?php
// This is an ajax view
echo $this->Form->create('Memo');
echo $this->Form->input('type', array('label' => 'Tipo'));
echo $this->Form->input('expedition_date', array('label' => 'Fecha de expedición', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('description', array('label' => 'Descripción', 'rows' => '3'));
echo $this->Form->input('content', array('label' => 'Contenido'));

echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Js->submit('GUARDAR', array(
    //Create ajax submit button
    'update' => '#dialog_content'
));

if($saved == true)
{
    echo "<script>
            loadIndexPanel('memos');
            $('#dialog_content').dialog('close');  //close containing dialog
        </script>";
}

echo  $this->Form->end();
echo $this->Js->writeBuffer();
?>

<div class="error-message">
    <p><?php echo $errorMessage; ?></p>
</div>