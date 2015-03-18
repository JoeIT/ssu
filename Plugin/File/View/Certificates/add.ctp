<script type="text/javascript">
    $(document).ready(function(){

        $('#CertificateDigitalFile').change(function(event){
            $('#CertificateFileName').val( $('#CertificateDigitalFile').val() );

            var files = event.target.files;
            var file = files[0];

            if (files && file)
            {
                var reader = new FileReader();

                reader.onload = function(readerEvt)
                {
                    $("#CertificateFileBase64").val( btoa( readerEvt.target.result ) );
                };

                reader.readAsBinaryString(file);
            }
        });
    });
</script>
<?php
// This is an ajax view
echo $this->Form->create('Certificate', array('type' => 'file'));
echo $this->Form->input('expedition_date', array('label' => 'Fecha de expedición', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('titulation_grade', array('label' => 'Título/Certificado(*)'));
echo $this->Form->input('provision', array('label' => 'Modalidad(*)', 'options' => $CERTIFICATE_PROVISION));
echo $this->Form->input('institution', array('label' => 'Institución(*)'));
echo $this->Form->input('location', array('label' => 'Ubicación'));
echo $this->Form->input('description', array('label' => 'Descripción'));
echo $this->Form->input('content_text', array('label' => 'Contenido', 'rows' => '2'));
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