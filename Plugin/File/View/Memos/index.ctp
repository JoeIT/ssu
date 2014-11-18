<table border="1">
    <tr>
        <th>TIPO</th>
        <th>FECHA DE EXPEDICION</th>
        <th>DESCRIPCION</th>
        <th>CONTENIDO</th>
    </tr>
    <?php  foreach  ($memosList  as  $memo):  ?>
    <tr>
        <td><?php  echo  $memo['Memo']['type'];  ?></td>
        <td><?php  echo  $memo['Memo']['expedition_date'];  ?></td>
        <td><?php  echo  $memo['Memo']['description'];  ?></td>
        <td><?php  echo  $memo['Memo']['content'];  ?></td>
    </tr>
<?php  endforeach;  ?>
<?php  unset($memo);  ?>
</table>