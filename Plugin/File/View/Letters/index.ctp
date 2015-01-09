<h3>CARTAS</h3>

<table border="1" class="css-index_table">
    <tr>
        <th>FECHA</th>
        <th>REMITENTE</th>
        <th>DESTINATARIO</th>
        <th>ASUNTO</th>
        <th>CONTENIDO</th>
        <th></th>
    </tr>
    <?php  foreach ($lettersList  as  $letter){ ?>
        <tr>
            <td><?php echo date("d/M/Y", strtotime($letter['Letter']['date'])); ?></td>
            <td><?php echo $letter['Employee']['name']; ?></td>
            <td><?php echo $letter['Letter']['addressee']; ?></td>
            <td><?php echo $letter['Letter']['subject']; ?></td>
            <td><?php echo $letter['Letter']['contents']; ?></td>
            <td>
                <a href='javascript:void(0)' id="crud_action" type="letters" id_type="<?php echo $letter['Letter']['id']; ?>" >Modificar</a>
                <a href='javascript:void(0)' id="crud_action" type="letters" action="delete" id_type="<?php echo $letter['Letter']['id']; ?>" >Eliminar</a>
            </td>
        </tr>
    <?php } ?>
</table>