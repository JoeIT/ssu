<?php
// This is an ajax view
echo  $this->Form->create('Vacation');
?>

<table border="0" class="css-view_table">
    <tr>
        <th>Nombre:</th>
    </tr>
    <tr>
        <td><?php echo $vacation['Vacation']['name']; ?></td>
    </tr>
    <tr>
        <th>Descripción:</th>
    </tr>
    <tr>
        <td><?php echo h($vacation['Vacation']['description']); ?></td>
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
            loadIndexPanel('vacations');
            $('#dialog_content').dialog('close');  //close containing dialog
        </script>";
}

echo  $this->Form->end();
echo $this->Js->writeBuffer();
?>

<div class="error-message">
    <p><?php echo $errorMessage; ?></p>
</div>