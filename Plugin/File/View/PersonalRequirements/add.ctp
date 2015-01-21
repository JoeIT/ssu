<?php
// This is an ajax view
echo $this->Form->create('PersonalRequirement');
echo $this->Form->input('expedition_date', array('label' => 'Fecha de expedición', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('code', array('label' => 'Código(*)'));
?>
<hr>
<?php
echo $this->Form->input('area', array('label' => 'Area'));
echo $this->Form->input('unit', array('label' => 'Unidad'));
echo $this->Form->input('job', array('label' => 'Cargo a cubrir'));
echo $this->Form->input('from_date', array('label' => 'A partir de', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('to_date', array('label' => 'Hasta', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
?>
<hr>
<?php
echo $this->Form->input('reason', array('label' => 'Razón de pedido'));
echo $this->Form->input('supersede', array('label' => 'Sustituye a'));
echo $this->Form->input('comments', array('label' => 'Comentarios', 'rows' => '2'));
?>
<hr>
<?php
echo $this->Form->input('petitioner', array('label' => 'Solicitante'));
echo $this->Form->input('petition_date', array('label' => 'Fecha de solicitud', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
?>
<hr>
<?php
echo $this->Form->input('report', array('label' => 'Informe superior inmediato'));
echo $this->Form->input('report_date', array('label' => 'Fecha de informe', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
?>
<hr>
<?php
echo $this->Form->input('approved_by', array('label' => 'Aprobado por'));
?>
<hr>
<?php
echo $this->Form->input('tags', array('multiple' => 'checkbox', 'options' => $GLOBAL_TAGS, 'selected' => $selected));

echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Js->submit('GUARDAR', array(
    //Create ajax submit button
    'update' => '#dialog_content'
));

if($saved == true)
{
    echo "<script>
            loadIndexPanel('personal_requirements');
            $('#dialog_content').dialog('close');  //Close containing dialog
        </script>";
}

echo  $this->Form->end();
echo $this->Js->writeBuffer();
?>

<div class="error-message">
    <p><?php echo $errorMessage; ?></p>
</div>