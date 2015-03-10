<?php
if( count($personalRequirementsList) > 0){
?>

<h3>REQUERIMIENTO DE PERSONAL</h3>

<table border="1" class="css-index_table">
    <tr>
        <th>FECHA</th>
        <th>CODIGO</th>
        <th>AREA</th>
        <th>UNIDAD</th>
        <th>SUSTITUYE A</th>
        <th>SOLICITANTE</th>
        <th>APROBADO</th>
        <th>DIGITAL</th>
        <th></th>
    </tr>
    <?php
    if( count($personalRequirementsList) == 0)
        echo "<tr><td colspan='20' align='center'>NO HAY REGISTROS</td></tr>";

    foreach ($personalRequirementsList  as  $personalRequirement){ ?>
        <tr>
            <td class="css-td_perfect_fit"><?php echo date("d/M/Y", strtotime($personalRequirement['Personalrequirement']['expedition_date']));  ?></td>
            <td><?php echo $personalRequirement['Personalrequirement']['code']; ?></td>
            <td><?php echo $personalRequirement['Personalrequirement']['area']; ?></td>
            <td><?php echo $personalRequirement['Personalrequirement']['unit']; ?></td>
            <td><?php echo $personalRequirement['Personalrequirement']['supersede']; ?></td>
            <td><?php echo $personalRequirement['Personalrequirement']['petitioner']; ?></td>
            <td><?php echo $personalRequirement['Personalrequirement']['approved_by']; ?></td>
            <td>
                <?php
                if( !empty($personalRequirement['Personalrequirement']['digital_file']) && $personalRequirement['Personalrequirement']['digital_file'] != null ){ ?>
                    <a href="<?php
                    echo '/useraclSQL/file/img/PERSONAL/' . $personalRequirement['Employee']['code'] . '/PERSONAL_REQUIREMENTS/' .$personalRequirement['Personalrequirement']['digital_file'];
                    ?>" target="_blank">Si</a>
                <?php } ?>
            </td>
            <td class="css-td_perfect_fit">
                <a href='javascript:void(0)'
                   id="crud_action"
                   type="personalrequirements"
                   id_type="<?php echo $personalRequirement['Personalrequirement']['id']; ?>"
                   class="css-action_button css-mini_action_button"
                    >Modificar</a>

                <a href='javascript:void(0)'
                   id="crud_action"
                   type="personalrequirements"
                   action="delete"
                   id_type="<?php echo $personalRequirement['Personalrequirement']['id']; ?>"
                   class="css-action_button css-mini_action_button css-delete_button"
                    >Eliminar</a>
            </td>
        </tr>
    <?php }} ?>
</table>