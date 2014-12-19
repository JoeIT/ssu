<table border="1" class="css-index_table">
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>DESCRIPCION</th>
        <th></th>
    </tr>
    <?php  foreach ($vacationsList  as  $vacation){ ?>
        <tr>
            <td><?php echo $this->Html->link($vacation[0]['id'],
                    array('controller' => 'vacation', 'action' => 'edit', $vacation[0]['id'])); ?>
            </td>
            <td><?php echo $vacation[0]['name']; ?></td>
            <td><?php echo $vacation[0]['description']; ?></td>
            <td>
                <a href='javascript:void(0)' id="crud_action" type="vacations" id_type="<?php echo $vacation[0]['id']; ?>" >Modificar</a>
                <a href='javascript:void(0)' id="crud_action" type="vacations" action="delete" id_type="<?php echo $vacation[0]['id']; ?>" >Eliminar</a>
            </td>
        </tr>
    <?php } ?>
</table>