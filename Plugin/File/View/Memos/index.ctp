<table border="1">
    <tr>
        <th>TIPO</th>
        <th>FECHA DE EXPEDICION</th>
        <th>DESCRIPCION</th>
        <th>CONTENIDO</th>
        <th></th>
    </tr>
    <?php  foreach  ($memosList  as  $memo):  ?>
    <tr>
        <td><?php  echo  $memo['Memo']['type'];  ?></td>
        <td><?php  echo  $memo['Memo']['expedition_date'];  ?></td>
        <td><?php  echo  $memo['Memo']['description'];  ?></td>
        <td><?php  echo  $memo['Memo']['content'];  ?></td>
        <td>
            <a href="javascript:void(0)" >Modificar</a>
            <?php echo  $this->Form->postLink(
                'Eliminar',
                array('action'  =>  'delete',  $memo['Memo']['id']),
                array('confirm'  =>  'Eliminar Memorandum: ' . $memo['Memo']['description'])
            );
            ?>
        </td>
    </tr>
<?php  endforeach;  ?>
<?php  unset($memo);  ?>
</table>