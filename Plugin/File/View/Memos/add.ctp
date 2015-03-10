<script type="text/javascript">
    $(document).ready(function(){

        $('#MemoDigitalFile').change(function(event){
            $('#MemoFileName').val( $('#MemoDigitalFile').val() );

            var files = event.target.files;
            var file = files[0];

            if (files && file)
            {
                var reader = new FileReader();

                reader.onload = function(readerEvt)
                {
                    $("#MemoFileBase64").val( btoa( readerEvt.target.result ) );
                };

                reader.readAsBinaryString(file);
            }
        });
    });
</script>
<?php
// This is an ajax view
echo $this->Form->create('Memo', array('type' => 'file'));
echo $this->Form->input('expedition_date', array('label' => 'Fecha de expedición', 'dateFormat' => 'DMY', 'class' => 'css-date_area', 'minYear' => date('Y') - 100, 'maxYear' => date('Y'), 'separator' => '/'));
echo $this->Form->input('code', array('label' => 'Cite No(*)'));
echo $this->Form->input('description', array('label' => 'Descripción'));
echo $this->Form->input('content_text', array('label' => 'Contenido', 'rows' => '3'));
echo $this->Form->input('file_base64', array('type' => 'hidden'));
echo $this->Form->input('digital_file', array('type' => 'file', 'label' => 'Documento digital', 'class' => 'css-file_chooser'));
echo $this->Form->input('tags', array('multiple' => 'checkbox', 'options' => $GLOBAL_TAGS, 'selected' => $selected));

echo $this->Form->input('id', array('type' => 'hidden'));
echo $this->Js->submit('GUARDAR', array(
    //Create ajax submit button
    'update' => '#dialog_content'
));

if($saved == true)
{
    echo "<script>
            loadIndexPanel('memos');
            $('#dialog_content').dialog('close');  //close containing dialog
        </script>";
}

echo  $this->Form->end();
echo $this->Js->writeBuffer();
?>

<div class="error-message">
    <p><?php echo $errorMessage; ?></p>
</div>