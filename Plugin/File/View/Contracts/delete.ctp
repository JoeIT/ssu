<?php
// This is an ajax view
echo  $this->Form->create('Contract');
?>

<table border="0" class="css-view_table">
    <tr>
        <th>Número:</th>
    </tr>
    <tr>
        <td><?php echo $contract['Contract']['number']; ?></td>
    </tr>
    <tr>
        <th>Fecha inicial:</th>
    </tr>
    <tr>
        <td><?php echo $contract['Contract']['start_date']; ?></td>
    </tr>
    <tr>
        <th>Fecha final:</th>
    </tr>
    <tr>
        <td><?php echo $contract['Contract']['end_date']; ?></td>
    </tr>
    <tr>
        <th>Servicio a prestar:</th>
    </tr>
    <tr>
        <td><?php echo h($contract['Contract']['job']); ?></td>
    </tr>
    <tr>
        <th>Tiempo:</th>
    </tr>
    <tr>
        <td><?php echo $CONTRACT_TIME[$contract['Contract']['time']]; ?></td>
    </tr>
    <tr>
        <th>Salario:</th>
    </tr>
    <tr>
        <td><?php echo $contract['Contract']['salary']; ?></td>
    </tr>
    <tr>
        <th>Plazo:</th>
    </tr>
    <tr>
        <td><?php echo $CONTRACT_TERMS[$contract['Contract']['term']]; ?></td>
    </tr>
    <tr>
        <th>Representante del seguro:</th>
    </tr>
    <tr>
        <td><?php echo h($contract['Contract']['representant']); ?></td>
    </tr>
    <tr>
        <th>Asesor legal:</th>
    </tr>
    <tr>
        <td><?php echo h($contract['Contract']['legal_adviser']); ?></td>
    </tr>
    <tr>
        <th>Descripción:</th>
    </tr>
    <tr>
        <td><?php echo h($contract['Contract']['description']); ?></td>
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
            loadIndexPanel('certificates');
            $('#dialog_content').dialog('close');  //close containing dialog
        </script>";
}

echo  $this->Form->end();
echo $this->Js->writeBuffer();
?>

<div class="error-message">
    <p><?php echo $errorMessage; ?></p>
</div>