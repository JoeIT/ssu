
<script type="text/javascript">
    $(document).ready(function(){

        $('#LetterDigitalFile').change(function(event){
            $('#LetterFileName').val( $('#LetterDigitalFile').val() );

            /*
             var tmppath = URL.createObjectURL( event.target.files[0] );
             //$("img").fadeIn("fast").attr( 'src', URL.createObjectURL( event.target.files[0]) );
             $("#DocumentFileName").val( tmppath );
             */
            //$('#DocumentDigitalFile').val();
            //--------------------------------
            var files = event.target.files;
            var file = files[0];

            if (files && file)
            {
                var reader = new FileReader();

                reader.onload = function(readerEvt)
                {
                    $("#LetterFileBase64").val( btoa( readerEvt.target.result ) );
                };

                reader.readAsBinaryString(file);
            }

            /*
             if (window.File && window.FileReader && window.FileList && window.Blob) {
             document.getElementById('DocumentDigitalFile').addEventListener('change', handleFileSelect, false);
             } else {
             alert('The File APIs are not fully supported in this browser.');
             }*/
        });
    });
</script>

<?php
// This is an ajax view
echo $this->Form->create('Letter', array('type' => 'file'));
echo $this->Form->input('date', array('label' => 'Fecha de expedición', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('addressee', array('label' => 'Destinatario(*)'));
echo $this->Form->input('subject', array('label' => 'Asunto(*)'));
echo $this->Form->input('content_text', array('label' => 'Contenido', 'rows' => '3'));

echo $this->Form->input('file_base64', array('type' => 'hidden'));
echo $this->Form->input('digital_file', array('type' => 'file', 'label' => 'Documento digital', 'class' => 'css-file_chooser'));

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
            //loadIndexPanel('letters');
            $('#dialog_content').dialog('close');  //Close containing dialog
        </script>";
}

echo  $this->Form->end();
echo $this->Js->writeBuffer();
?>

<div class="error-message">
    <p><?php echo $errorMessage; ?></p>
</div>