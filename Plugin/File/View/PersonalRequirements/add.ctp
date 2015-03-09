<table border="3">
    <tr>
        <td>
<?php
// This is an ajax view
echo $this->Form->create('PersonalRequirement');
echo $this->Form->input('expedition_date', array('label' => 'Fecha de expedición', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('code', array('label' => 'Código(*)'));
?>

<?php
echo $this->Form->input('area', array('label' => 'Area'));
echo $this->Form->input('unit', array('label' => 'Unidad'));
echo $this->Form->input('job', array('label' => 'Cargo a cubrir'));
echo $this->Form->input('from_date', array('label' => 'A partir de', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('to_date', array('label' => 'Hasta', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
?>
    </td>
    <td>
<?php
echo $this->Form->input('reason', array('label' => 'Razón de pedido'));
echo $this->Form->input('supersede', array('label' => 'Sustituye a'));
echo $this->Form->input('comments', array('label' => 'Comentarios', 'rows' => '2'));
echo $this->Form->input('petitioner', array('label' => 'Solicitante'));
echo $this->Form->input('petition_date', array('label' => 'Fecha de solicitud', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
?>
    </td>
    <td>
<?php
echo $this->Form->input('report', array('label' => 'Informe superior inmediato'));
echo $this->Form->input('report_date', array('label' => 'Fecha de informe', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('approved_by', array('label' => 'Aprobado por'));
echo $this->Form->input('file_base64', array('type' => 'hidden'));
echo $this->Form->input('digital_file', array('type' => 'file', 'label' => 'Documento digital', 'class' => 'css-file_chooser'));
echo $this->Form->input('tags', array('multiple' => 'checkbox', 'options' => $GLOBAL_TAGS, 'selected' => $selected));

echo $this->Form->input('id', array('type' => 'hidden'));
?>
    </td>
<tr>
    <td colspan="3" align="center">
<?php
echo $this->Js->submit('GUARDAR', array(
    //Create ajax submit button
    'update' => '#dialog_content'
));

?>
    </td>
    </tr>
</table>
<?php

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