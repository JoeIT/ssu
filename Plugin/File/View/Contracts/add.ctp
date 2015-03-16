<script type="text/javascript">
    $(document).ready(function(){

        $('#ContractDigitalFile').change(function(event){
            $('#ContractFileName').val( $('#ContractDigitalFile').val() );

            var files = event.target.files;
            var file = files[0];

            if (files && file)
            {
                var reader = new FileReader();

                reader.onload = function(readerEvt)
                {
                    $("#ContractFileBase64").val( btoa( readerEvt.target.result ) );
                };

                reader.readAsBinaryString(file);
            }
        });
    });
</script>
<?php
// This is an ajax view
echo $this->Form->create('Contract', array('type' => 'file'));

echo $this->Form->input('number', array('label' => 'Contrato Nº(*)'));
echo $this->Form->input('start_date', array('label' => 'Fecha de inicio', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('end_date', array('label' => 'Fecha de finalización', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('job', array('label' => 'Servicio a prestar(*)'));
echo $this->Form->input('time', array('label' => 'Tiempo(*)', 'options' => $CONTRACT_TIME));
echo $this->Form->input('salary', array('label' => 'Salario(*)'));
echo $this->Form->input('term', array('label' => 'Plazo(*)', 'options' => $CONTRACT_TERMS));
echo $this->Form->input('representant', array('label' => 'Representante del seguro(*)'));
echo $this->Form->input('legal_adviser', array('label' => 'Asesor legal'));
echo $this->Form->input('description', array('label' => 'Descripción'));

echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Form->input('file_base64', array('type' => 'hidden'));
echo $this->Form->input('digital_file', array('type' => 'file', 'label' => 'Documento digital', 'class' => 'css-file_chooser'));

echo $this->Form->input('tags', array('multiple' => 'checkbox', 'options' => $GLOBAL_TAGS, 'selected' => $selected));

echo $this->Js->submit('GUARDAR', array(
    //Create ajax submit button
    'update' => '#dialog_content'
));

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