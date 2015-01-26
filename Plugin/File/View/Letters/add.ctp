<?php
// This is an ajax view
echo $this->Form->create('Letter', array('type' => 'file'));
echo $this->Form->input('date', array('label' => 'Fecha de expedición', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('addressee', array('label' => 'Destinatario(*)'));
echo $this->Form->input('subject', array('label' => 'Asunto(*)'));
echo $this->Form->input('content_text', array('label' => 'Contenido', 'rows' => '3'));

echo $this->Form->input('digital_file', array('type' => 'file', 'label' => 'Copia digital'));

//$selected = array('records', 'contracts');
//echo $form->input('Model.name', array('multiple' => 'checkbox', 'options' => $options, 'selected' => $selected));
echo $this->Form->input('tags', array('multiple' => 'checkbox', 'options' => $GLOBAL_TAGS, 'selected' => $selected));

echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Js->submit('GUARDAR', array(
    //Create ajax submit button
    'update' => '#dialog_content'
));

if($saved == true)
{
    echo "<script>
            loadIndexPanel('letters');
            $('#dialog_content').dialog('close');  //Close containing dialog
        </script>";
}

echo  $this->Form->end();
echo $this->Js->writeBuffer();
?>

<div class="error-message">
    <p><?php echo $errorMessage; ?></p>
</div>