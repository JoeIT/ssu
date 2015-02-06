<?php
// This is an ajax view
echo  $this->Form->create('Document');
?>

<table border="0" class="css-view_table">
    <tr>
        <th>Documento:</th>
    </tr>
    <tr>
        <td><?php echo $document['Document']['name']; ?></td>
    </tr>
    <tr>
        <th>Descripción:</th>
    </tr>
    <tr>
        <td><?php echo $document['Document']['description']; ?></td>
    </tr>
    <tr>
        <th>Documento digital:</th>
    </tr>
    <tr>
        <td><?php echo h($document['Document']['digital_file']); ?></td>
    </tr>
</table>
</br>

<?php
echo $this->Js->submit('ELIMINAR', array(
    //Create ajax submit button
    'update' => '#dialog_content'
));

if($deleted == true)
{
    echo "<script>
            loadIndexPanel('documents');
            $('#dialog_content').dialog('close');  //close containing dialog
        </script>";
}

echo  $this->Form->end();
echo $this->Js->writeBuffer();
?>

<div class="error-message">
    <p><?php echo $errorMessage; ?></p>
</div>