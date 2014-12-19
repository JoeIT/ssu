<?php
// This is an ajax view
echo  $this->Form->create('Memo');
?>

<table border="0" class="css-view_table">
    <tr>
        <th>Tipo:</th>
    </tr>
    <tr>
        <td><?php echo $memo['Memo']['type']; ?></td>
    </tr>
    <tr>
        <th>Fecha de expedición:</th>
    </tr>
    <tr>
        <td><?php echo $memo['Memo']['expedition_date']; ?></td>
    </tr>
    <tr>
        <th>Descripción:</th>
    </tr>
    <tr>
        <td><?php echo h($memo['Memo']['description']); ?></td>
    </tr>
    <tr>
        <th>Contenido:</th>
    </tr>
    <tr>
        <td><?php echo $memo['Memo']['content']; ?></td>
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