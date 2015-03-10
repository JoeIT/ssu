<script type="text/javascript">
$(document).ready(function(){

    $('#DocumentDigitalFile').change(function(event){
        $('#DocumentFileName').val( $('#DocumentDigitalFile').val() );

        var files = event.target.files;
        var file = files[0];

        if (files && file)
        {
            var reader = new FileReader();

            reader.onload = function(readerEvt)
            {
                $("#DocumentFileBase64").val( btoa( readerEvt.target.result ) );
            };

            reader.readAsBinaryString(file);
        }
    });
});
</script>

<?php
// This is an ajax view
echo $this->Form->create('Document', array('type' => 'file'));
echo $this->Form->input('name', array('label' => 'Documento(*)'));
echo $this->Form->input('description', array('label' => 'Descripción'));
echo $this->Form->input('file_base64', array('type' => 'hidden'));
echo $this->Form->input('digital_file', array('type' => 'file', 'label' => 'Documento digital', 'class' => 'css-file_chooser'));
//echo '<input type="file" name="fileToUpload" id="fileToUpload">';
echo $this->Form->input('tags', array('multiple' => 'checkbox', 'options' => $GLOBAL_TAGS, 'selected' => $selected));
echo $this->Form->input('id', array('type' => 'hidden'));

echo $this->Js->submit('GUARDAR', array(
    //Create ajax submit button
    'update' => '#dialog_content',
    'class' => 'docs_submit_button'
));

if($saved == true)
{
    echo "<script>
            loadIndexPanel('documents');
            $('#dialog_content').dialog('close');  //Close containing dialog
        </script>";
}

echo $this->Form->end();
echo $this->Js->writeBuffer(array('inline' => 'true'));
//echo $this->Html->script('jquery');
?>

<div class="error-message">
    <p><?php echo $errorMessage; ?></p>
</div>