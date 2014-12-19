<?php
// This is an ajax view
echo  $this->Form->create('PersonalEducation');
?>

<table border="0" class="css-view_table">
    <tr>
        <th>Fecha de expedición:</th>
    </tr>
    <tr>
        <td><?php echo $personalEducation['PersonalEducation']['expedition_date']; ?></td>
    </tr>
    <tr>
        <th>Título obtenido:</th>
    </tr>
    <tr>
        <td><?php echo h($personalEducation['PersonalEducation']['titulation_grade']); ?></td>
    </tr>
    <tr>
        <th>Institución:</th>
    </tr>
    <tr>
        <td><?php echo h($personalEducation['PersonalEducation']['institution']); ?></td>
    </tr>
    <tr>
        <th>Ubicación:</th>
    </tr>
    <tr>
        <td><?php echo h($personalEducation['PersonalEducation']['location']); ?></td>
    </tr>
    <tr>
        <th>Descripción:</th>
    </tr>
    <tr>
        <td><?php echo h($personalEducation['PersonalEducation']['description']); ?></td>
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
            loadIndexPanel('personal_education');
            $('#dialog_content').dialog('close');  //close containing dialog
        </script>";
}

echo  $this->Form->end();
echo $this->Js->writeBuffer();
?>

<div class="error-message">
    <p><?php echo $errorMessage; ?></p>
</div>