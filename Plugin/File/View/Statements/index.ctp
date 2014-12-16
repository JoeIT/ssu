<table border="1" class="css-index_table">
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>DESCRIPCION</th>
        <th></th>
    </tr>
    <?php  foreach ($statementsList  as  $statement){ ?>
    <tr>
        <td><?php echo $this->Html->link($statement[0]['id'],
                array('controller' => 'statement', 'action' => 'edit', $statement[0]['id'])); ?>
        </td>
        <td><?php echo $statement[0]['name']; ?></td>
        <td><?php echo $statement[0]['description']; ?></td>
        <td>
            <a href='javascript:void(0)' id="crud_action" type="statements" id_type="<?php echo $statement[0]['id']; ?>" >Modificar</a>
            <a href='javascript:void(0)' id="crud_action" action="delete" id_type="<?php echo $statement[0]['id']; ?>" >Eliminar</a>

            <?php /*echo  $this->Form->postLink(
                'Eliminar',
                array('action'  =>  'delete',  $statement['Statement']['id']),
                array('confirm'  =>  'Eliminar declaración: ' . $statement['Statement']['name'])
                );*/
            ?>
        </td>
    </tr>
    <?php } ?>
</table>