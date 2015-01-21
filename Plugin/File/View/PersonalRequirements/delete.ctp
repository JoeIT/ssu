<?php
// This is an ajax view
echo  $this->Form->create('PersonalRequirement');
?>

<table border="0" class="css-view_table">
    <tr>
        <th>Fecha de expedición:</th>
        <td><?php echo $personalRequirement['PersonalRequirement']['expedition_date']; ?></td>
    </tr>
    <tr>
        <th>Código:</th>
        <td><?php echo $personalRequirement['PersonalRequirement']['code']; ?></td>
    </tr>
    <tr>
        <th>Area:</th>
        <td><?php echo h($personalRequirement['PersonalRequirement']['area']); ?></td>
    </tr>
    <tr>
        <th>Unidad:</th>
        <td><?php echo h($personalRequirement['PersonalRequirement']['unit']); ?></td>
    </tr>
    <tr>
        <th>Cargo a cubrir:</th>
        <td><?php echo h($personalRequirement['PersonalRequirement']['job']); ?></td>
    </tr>
    <tr>
        <th>A partir de:</th>
        <td><?php echo $personalRequirement['PersonalRequirement']['from_date']; ?></td>
    </tr>
    <tr>
        <th>Hasta:</th>
        <td><?php echo $personalRequirement['PersonalRequirement']['to_date']; ?></td>
    </tr>	
	<tr>
        <th>Razón del pedido:</th>
        <td><?php echo h($personalRequirement['PersonalRequirement']['reason']); ?></td>
    </tr>
	<tr>
        <th>Sustituye a:</th>
        <td><?php echo h($personalRequirement['PersonalRequirement']['supersede']); ?></td>
    </tr>
	
	<tr>
        <th>Otros comentarios:</th>
        <td><?php echo h($personalRequirement['PersonalRequirement']['comments']); ?></td>
    </tr>
	<tr>
        <th>Solicitante:</th>
        <td><?php echo h($personalRequirement['PersonalRequirement']['petitioner']); ?></td>
    </tr>
	<tr>
        <th>Fecha de solicitud:</th>
        <td><?php echo $personalRequirement['PersonalRequirement']['petitioner_date']; ?></td>
    </tr>
	<tr>
        <th>Informe superior inmediato:</th>
        <td><?php echo h($personalRequirement['PersonalRequirement']['report']); ?></td>
    </tr>
	<tr>
        <th>Fecha de informe:</th>
        <td><?php echo $personalRequirement['PersonalRequirement']['report_date']; ?></td>
    </tr>
	<tr>
        <th>Aprobado por:</th>
        <td><?php echo h($personalRequirement['PersonalRequirement']['approved_by']); ?></td>
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
            loadIndexPanel('personal_requirements');
            $('#dialog_content').dialog('close');  //close containing dialog
        </script>";
}

echo  $this->Form->end();
echo $this->Js->writeBuffer();
?>

<div class="error-message">
    <p><?php echo $errorMessage; ?></p>
</div>