<h3>CARTAS</h3>

<table border="1" class="css-index_table">
    <tr>
        <th>FECHA</th>
        <th>REMITENTE</th>
        <th>DESTINATARIO</th>
        <th>ASUNTO</th>
        <th></th>
    </tr>
    <?php
    if( count($lettersList) == 0)
        echo "<tr><td colspan='20' align='center'>NO HAY REGISTROS</td></tr>";

    foreach ($lettersList  as  $letter){ ?>
        <tr>
            <td><?php echo date("d/M/Y", strtotime($letter['Letter']['date'])); ?></td>
            <td><?php echo $letter['Employee']['name']; ?></td>
            <td><?php echo $letter['Letter']['addressee']; ?></td>
            <td><?php echo $letter['Letter']['subject']; ?></td>
            <td>
                <a href='javascript:void(0)' id="crud_action" type="letters" id_type="<?php echo $letter['Letter']['id']; ?>" >Modificar</a>
                <a href='javascript:void(0)' id="crud_action" type="letters" action="delete" id_type="<?php echo $letter['Letter']['id']; ?>" >Eliminar</a>
            </td>
        </tr>
    <?php } ?>
</table>