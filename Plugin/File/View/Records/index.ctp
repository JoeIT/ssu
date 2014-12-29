<table border="1" class="css-index_table">
    <tr>
        <th>ID</th>
        <th>NOMBRE</th>
        <th>DESCRIPCION</th>
        <th></th>
    </tr>
    <?php  foreach ($recordsList  as  $record){ ?>
        <tr>
            <td><?php echo $this->Html->link($record[0]['id'],
                    array('controller' => 'record', 'action' => 'edit', $record[0]['id'])); ?>
            </td>
            <td><?php echo $record[0]['name']; ?></td>
            <td><?php echo $record[0]['description']; ?></td>
            <td>
                <a href='javascript:void(0)' id="crud_action" type="records" id_type="<?php echo $record[0]['id']; ?>" >Modificar</a>
                <a href='javascript:void(0)' id="crud_action" type="records" action="delete" id_type="<?php echo $record[0]['id']; ?>" >Eliminar</a>
            </td>
        </tr>
    <?php } ?>
</table>

</br>
<h3>Categoria y escalafones</h3>
<table border="1" class="css-index_table">
    <tr>
        <th>Fecha</th>
        <th>Categoria</th>
    </tr>
</table>
