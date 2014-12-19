<table border="1" class="css-index_table">
    <tr>
        <th>FECHA DE EXPEDICION</th>
        <th>TITULO</th>
        <th>INSTITUCION</th>
        <th>UBICACION</th>
        <th></th>
    </tr>
    <?php  foreach  ($personalEducationList  as  $info):  ?>
        <tr>
            <td><?php echo date("d/m/Y", strtotime($info[0]['expedition_date']));  ?></td>
            <td><?php echo $info[0]['titulation_grade'];  ?></td>
            <td><?php echo $info[0]['institution'];  ?></td>
            <td><?php echo $info[0]['location'];  ?></td>
            <td>
                <a href='javascript:void(0)' id="crud_action" type="personal_education" id_type="<?php echo $info[0]['id']; ?>" >Modificar</a>
                <a href='javascript:void(0)' id="crud_action" type="personal_education" action="delete" id_type="<?php echo $info[0]['id']; ?>" >Eliminar</a>
            </td>
        </tr>
    <?php  endforeach;  ?>
    <?php  unset($info);  ?>
</table>