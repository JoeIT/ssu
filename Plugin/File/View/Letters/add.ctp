<h3>Carta:</h3>

<?php
// This is an ajax view
echo $this->Form->create('Letter');
echo $this->Form->input('date', array('label' => 'Fecha de expedición', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('addressee', array('label' => 'Destinatario'));
echo $this->Form->input('subject', array('label' => 'Asunto'));
echo $this->Form->input('contents', array('label' => 'Contenido', 'rows' => '3'));

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