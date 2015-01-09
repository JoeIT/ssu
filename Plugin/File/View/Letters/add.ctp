<h3>Carta:</h3>

<?php
// This is an ajax view
echo $this->Form->create('Letter');
echo $this->Form->input('date', array('label' => 'Fecha de expedición', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('addressee', array('label' => 'Destinatario'));
echo $this->Form->input('subject', array('label' => 'Asunto'));
echo $this->Form->input('contents', array('label' => 'Contenido', 'rows' => '3'));

$options = array(
    'records' => 'Antecedentes y títulos',
    'jobs' => 'Experiencias de trabajo',
    'courses' => 'Cursos realizados',
    'contracts' => 'Contratos de trabajo',
    'statements' => 'Declaraciones juradas de bienes y rentas',
    'others' => 'Otros'
);
//$selected = array(1, 3);
//echo $form->input('Model.name', array('multiple' => 'checkbox', 'options' => $options, 'selected' => $selected));
echo $this->Form->input('tags', array('multiple' => 'checkbox', 'options' => $options));
/*
echo $this->Form->input('Antecedentes y títulos', array('type' => 'checkbox'));
echo $this->Form->input('Experiencias de trabajo', array('type' => 'checkbox'));
echo $this->Form->input('Cursos realizados', array('type' => 'checkbox'));
echo $this->Form->input('Contratos de trabajo', array('type' => 'checkbox'));
echo $this->Form->input('Declaraciones juradas de bienes y rentas', array('type' => 'checkbox'));
echo $this->Form->input('Otros', array('type' => 'checkbox'));
*/

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