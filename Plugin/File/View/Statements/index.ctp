<table border="1">
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>DESCRIPCION</th>
        <th></th>
    </tr>
    <?php  foreach ($statementsList  as  $statement){  ?>
    <tr>
        <td><?php echo $this->Html->link($statement['Statement']['id'],
                array('controller' => 'statement', 'action' => 'edit', $statement['Statement']['id'])); ?></td>
        <td><?php echo $statement['Statement']['name']; ?></td>
        <td><?php echo $statement['Statement']['description']; ?></td>
        <td>
            <a href="javascript:void(0)" >Modificar</a>
            <?php echo  $this->Form->postLink(
                'Eliminar',
                array('action'  =>  'delete',  $statement['Statement']['id']),
                array('confirm'  =>  'Eliminar declaración: ' . $statement['Statement']['name'])
                );
            ?>
        </td>
    </tr>
    <?php } ?>
</table>