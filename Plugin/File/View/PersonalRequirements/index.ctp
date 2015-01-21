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
        <th></th>
    </tr>
    <?php
    if( count($personalRequirementsList) == 0)
        echo "<tr><td colspan='20' align='center'>NO HAY REGISTROS</td></tr>";

    foreach  ($personalRequirementsList  as  $personalRequirement):  ?>
        <tr>
            <td class="css-td_perfect_fit"><?php echo date("d/M/Y", strtotime($personalRequirement['PersonalRequirement']['expedition_date']));  ?></td>
            <td><?php echo $personalRequirement['PersonalRequirement']['code']; ?></td>
            <td><?php echo $personalRequirement['PersonalRequirement']['area']; ?></td>
            <td><?php echo $personalRequirement['PersonalRequirement']['unit']; ?></td>
            <td><?php echo $personalRequirement['PersonalRequirement']['supersede']; ?></td>
            <td><?php echo $personalRequirement['PersonalRequirement']['petitioner']; ?></td>
            <td><?php echo $personalRequirement['PersonalRequirement']['approved_by']; ?></td>
            <td class="css-td_perfect_fit">
                <a href='javascript:void(0)'
                   id="crud_action"
                   type="personal_requirements"
                   id_type="<?php echo $personalRequirement['PersonalRequirement']['id']; ?>"
                   class="css-action_button css-mini_action_button"
                    >Modificar</a>

                <a href='javascript:void(0)'
                   id="crud_action"
                   type="personal_requirements"
                   action="delete"
                   id_type="<?php echo $personalRequirement['PersonalRequirement']['id']; ?>"
                   class="css-action_button css-mini_action_button css-delete_button"
                    >Eliminar</a>
            </td>
        </tr>
    <?php  endforeach;  ?>
    <?php  unset($info);  ?>
</table>