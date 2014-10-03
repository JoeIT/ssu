<table border="1">
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>DESCRIPTION</th>
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
            <a href="javascript:void(0)" >Eliminar</a>
        </td>
    </tr>
    <?php } ?>
</table>