<?php
// This is an ajax view
echo  $this->Form->create('Certificate');
?>

<table border="0" class="css-view_table">
    <tr>
        <th>Fecha de expedición:</th>
    </tr>
    <tr>
        <td><?php echo $certificate['Certificate']['expedition_date']; ?></td>
    </tr>
    <tr>
        <th>Título/Certificado:</th>
    </tr>
    <tr>
        <td><?php echo h($certificate['Certificate']['titulation_grade']); ?></td>
    </tr>
    <tr>
        <th>Modalidad:</th>
    </tr>
    <tr>
        <td><?php echo $CERTIFICATE_PROVISION[$certificate['Certificate']['provision']]; ?></td>
    </tr>
    <tr>
        <th>Institución:</th>
    </tr>
    <tr>
        <td><?php echo h($certificate['Certificate']['institution']); ?></td>
    </tr>
    <tr>
        <th>Ubicación:</th>
    </tr>
    <tr>
        <td><?php echo h($certificate['Certificate']['location']); ?></td>
    </tr>
    <tr>
        <th>Descripción:</th>
    </tr>
    <tr>
        <td><?php echo h($certificate['Certificate']['description']); ?></td>
    </tr>
    <tr>
        <th>Contenido:</th>
    </tr>
    <tr>
        <td><?php echo h($certificate['Certificate']['content_text']); ?></td>
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