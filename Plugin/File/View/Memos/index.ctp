<table border="1" class="css-index_table">
    <tr>
        <th>TIPO</th>
        <th>FECHA DE EXPEDICION</th>
        <th>DESCRIPCION</th>
        <th>CONTENIDO</th>
        <th></th>
    </tr>
    <?php  foreach  ($memosList  as  $memo):  ?>
    <tr>
        <td><?php  echo  $memo[0]['type'];  ?></td>
        <td><?php  echo  $memo[0]['expedition_date'];  ?></td>
        <td><?php  echo  $memo[0]['description'];  ?></td>
        <td><?php  echo  $memo[0]['content'];  ?></td>
        <td>
            <a href='javascript:void(0)' id="crud_action" type="memos" id_type="<?php echo $memo[0]['id']; ?>" >Modificar</a>
            <a href='javascript:void(0)' id="crud_action" type="memos" action="delete" id_type="<?php echo $memo[0]['id']; ?>" >Eliminar</a>
        </td>
    </tr>
<?php  endforeach;  ?>
<?php  unset($memo);  ?>
</table>