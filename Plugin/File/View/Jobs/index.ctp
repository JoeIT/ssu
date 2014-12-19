<table border="1" class="css-index_table">
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>DESCRIPCION</th>
        <th></th>
    </tr>
    <?php  foreach ($jobsList  as  $job){ ?>
        <tr>
            <td><?php echo $this->Html->link($job[0]['id'],
                    array('controller' => 'record', 'action' => 'edit', $job[0]['id'])); ?>
            </td>
            <td><?php echo $job[0]['name']; ?></td>
            <td><?php echo $job[0]['description']; ?></td>
            <td>
                <a href='javascript:void(0)' id="crud_action" type="jobs" id_type="<?php echo $job[0]['id']; ?>" >Modificar</a>
                <a href='javascript:void(0)' id="crud_action" type="jobs" action="delete" id_type="<?php echo $job[0]['id']; ?>" >Eliminar</a>
            </td>
        </tr>
    <?php } ?>
</table>