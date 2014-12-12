<?php
// This is an ajax view
echo  $this->Form->create('Statement');
?>

<table border="0" class="css-view_table">
    <tr>
        <th>Nombre:</th>
    </tr>
    <tr>
        <td><?php echo $statement['Statement']['name']; ?></td>
    </tr>
    <tr>
        <th>Descripción:</th>
    </tr>
    <tr>
        <td><?php echo h($statement['Statement']['description']); ?></td>
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
            loadIndexPanel('statements');
            $('#dialog_content').dialog('close');  //close containing dialog
        </script>";
}

echo  $this->Form->end();
echo $this->Js->writeBuffer();
?>

<div class="error-message">
    <p><?php echo $errorMessage; ?></p>
</div>