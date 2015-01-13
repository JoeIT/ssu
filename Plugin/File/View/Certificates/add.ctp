<h3>Carta:</h3>

<?php
// This is an ajax view
echo $this->Form->create('Certificate');
echo $this->Form->input('expedition_date', array('label' => 'Fecha de expedición', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('titulation_grade', array('label' => 'Título obtenido'));
echo $this->Form->input('institution', array('label' => 'Institución'));
echo $this->Form->input('location', array('label' => 'Ubicación'));
echo $this->Form->input('description', array('label' => 'Descripción', 'rows' => '3'));
echo $this->Form->input('tags', array('multiple' => 'checkbox', 'options' => $GLOBAL_TAGS, 'selected' => $selected));

echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Js->submit('GUARDAR', array(
    //Create ajax submit button
    'update' => '#dialog_content'
));

if($saved == true)
{
    echo "<script>
            loadIndexPanel('certificates');
            $('#dialog_content').dialog('close');  //close containing dialog
        </script>";
}

echo  $this->Form->end();
echo $this->Js->writeBuffer();
?>

<div class="error-message">
    <p><?php echo $errorMessage; ?></p>
</div>