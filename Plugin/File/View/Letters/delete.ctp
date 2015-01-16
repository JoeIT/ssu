<?php
// This is an ajax view
echo  $this->Form->create('Letter');
?>

<table border="0" class="css-view_table">
    <tr>
        <th>Fecha:</th>
    </tr>
    <tr>
        <td><?php echo $letter['Letter']['date']; ?></td>
    </tr>
    <tr>
        <th>Destinatario:</th>
    </tr>
    <tr>
        <td><?php echo $letter['Letter']['addressee']; ?></td>
    </tr>
    <tr>
        <th>Asunto:</th>
    </tr>
    <tr>
        <td><?php echo h($letter['Letter']['subject']); ?></td>
    </tr>
    <tr>
        <th>Contenido:</th>
    </tr>
    <tr>
        <td><?php echo h($letter['Letter']['content_text']); ?></td>
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
            loadIndexPanel('letters');
            $('#dialog_content').dialog('close');  //close containing dialog
        </script>";
}

echo  $this->Form->end();
echo $this->Js->writeBuffer();
?>

<div class="error-message">
    <p><?php echo $errorMessage; ?></p>
</div>