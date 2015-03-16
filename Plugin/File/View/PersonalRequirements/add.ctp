<script type="text/javascript">
    $(document).ready(function(){

        $('#PersonalrequirementDigitalFile').change(function(event){
            $('#PersonalrequirementFileName').val( $('#PersonalrequirementDigitalFile').val() );

            var files = event.target.files;
            var file = files[0];

            if (files && file)
            {
                var reader = new FileReader();

                reader.onload = function(readerEvt)
                {
                    $("#PersonalrequirementFileBase64").val( btoa( readerEvt.target.result ) );
                };

                reader.readAsBinaryString(file);
            }
        });
    });
</script>

<?php
// This is an ajax view
echo $this->Form->create('Personalrequirement');

echo '<table border="3"><tr><td>';

echo $this->Form->input('expedition_date', array('label' => 'Fecha de expedición', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('code', array('label' => 'Código(*)'));

echo $this->Form->input('area', array('label' => 'Area'));
echo $this->Form->input('unit', array('label' => 'Unidad'));
echo $this->Form->input('job', array('label' => 'Cargo a cubrir'));
echo $this->Form->input('from_date', array('label' => 'A partir de', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('to_date', array('label' => 'Hasta', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));

echo '</td><td>';

echo $this->Form->input('reason', array('label' => 'Razón de pedido'));
echo $this->Form->input('supersede', array('label' => 'Sustituye a'));
echo $this->Form->input('comments', array('label' => 'Comentarios', 'rows' => '2'));
echo $this->Form->input('petitioner', array('label' => 'Solicitante'));
echo $this->Form->input('petition_date', array('label' => 'Fecha de solicitud', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));

echo '</td><td>';

echo $this->Form->input('report', array('label' => 'Informe superior inmediato'));
echo $this->Form->input('report_date', array('label' => 'Fecha de informe', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('approved_by', array('label' => 'Aprobado por'));
echo $this->Form->input('file_base64', array('type' => 'hidden'));
echo $this->Form->input('digital_file', array('type' => 'file', 'label' => 'Documento digital', 'class' => 'css-file_chooser'));
echo $this->Form->input('tags', array('multiple' => 'checkbox', 'options' => $GLOBAL_TAGS, 'selected' => $selected));

echo $this->Form->input('id', array('type' => 'hidden'));

echo '</td></tr><tr><td colspan="3" align="center">';

echo $this->Js->submit('GUARDAR', array(
    //Create ajax submit button
    'update' => '#dialog_content'
));

echo '</td></tr></table>';

if($saved == true)
{
    echo "<script>
            $('#dialog_content').dialog('close');  //Close containing dialog
        </script>";
}

echo  $this->Form->end();
echo $this->Js->writeBuffer();
?>

<div class="error-message">
    <p><?php echo $errorMessage; ?></p>
</div>