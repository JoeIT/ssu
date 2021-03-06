<?php
if( count($memosList) > 0){
?>

<h3>MEMORANDUMS</h3>

<table border="1" class="css-index_table">
    <tr>
        <th>FECHA</th>
		<th>CODIGO</th>
        <th>DESCRIPCION</th>
        <th>CONTENIDO</th>
        <th>DIGITAL</th>
        <th></th>
    </tr>
    <?php
    foreach  ($memosList  as  $memo){ ?>
    <tr>
        <td class="css-td_perfect_fit"><?php echo date("d/M/Y", strtotime($memo['Memo']['expedition_date'])); ?></td>
        <td><?php echo $memo['Memo']['code']; ?></td>
        <td><?php echo $memo['Memo']['description']; ?></td>
        <td><?php echo $memo['Memo']['content_text']; ?></td>
        <td>
            <?php
            if( !empty($memo['Memo']['digital_file']) && $memo['Memo']['digital_file'] != null ){ ?>
                <a href="<?php
                echo '/useraclSQL/file/img/PERSONAL/' . $memo['Employee']['code'] . '/MEMOS/' .$memo['Memo']['digital_file'];
                ?>" target="_blank">Si</a>
            <?php } ?>
        </td>
        <td class="css-td_perfect_fit">
            <a href='javascript:void(0)'
               id="crud_action"
               type="memos"
               id_type="<?php echo $memo['Memo']['id']; ?>"
               class="css-action_button css-mini_action_button"
            >Modificar</a>

            <a href='javascript:void(0)'
               id="crud_action"
               type="memos"
               action="delete"
               id_type="<?php echo $memo['Memo']['id']; ?>"
               class="css-action_button css-mini_action_button css-delete_button"
            >Eliminar</a>
        </td>
    </tr>
<?php }} ?>
</table>