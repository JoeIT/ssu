<h3>CERTIFICADOS Y TITULOS</h3>

<table border="1" class="css-index_table">
    <tr>
        <th>FECHA DE EXPEDICION</th>
        <th>TITULO</th>
        <th>INSTITUCION</th>
        <th>UBICACION</th>
        <th></th>
    </tr>
    <?php
    if( count($certificatesList) == 0)
        echo "<tr><td colspan='20' align='center'>NO HAY REGISTROS</td></tr>";

    foreach  ($certificatesList  as  $certificate):  ?>
        <tr>
            <td><?php echo date("d/m/Y", strtotime($certificate[Certificate]['expedition_date']));  ?></td>
            <td><?php echo $certificate[Certificate]['titulation_grade'];  ?></td>
            <td><?php echo $certificate[Certificate]['institution'];  ?></td>
            <td><?php echo $certificate[Certificate]['location'];  ?></td>
            <td>
                <a href='javascript:void(0)' id="crud_action" type="certificates" id_type="<?php echo $certificate[Certificate]['id']; ?>" >Modificar</a>
                <a href='javascript:void(0)' id="crud_action" type="certificates" action="delete" id_type="<?php echo $certificate[Certificate]['id']; ?>" >Eliminar</a>
            </td>
        </tr>
    <?php  endforeach;  ?>
    <?php  unset($info);  ?>
</table>