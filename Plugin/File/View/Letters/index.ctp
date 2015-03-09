<?php
if( count($lettersList) > 0){
?>

<h3>CARTAS</h3>

<table border="1" class="css-index_table">
    <tr>
        <th>FECHA</th>
        <th>REMITENTE</th>
        <th>DESTINATARIO</th>
        <th>ASUNTO</th>
        <th>DIGITAL</th>
        <th></th>
    </tr>
    <?php
    foreach ($lettersList  as  $letter){ ?>
        <tr>
            <td class="css-td_perfect_fit"><?php echo date("d/M/Y", strtotime($letter['Letter']['date'])); ?></td>
            <td><?php echo $letter['Employee']['name']; ?></td>
            <td><?php echo $letter['Letter']['addressee']; ?></td>
            <td><?php echo $letter['Letter']['subject']; ?></td>
            <td>
                <?php
                if( !empty($letter['Letter']['digital_file']) && $letter['Letter']['digital_file'] != null ){ ?>
                    <a href="<?php
                    echo '/useraclSQL/file/img/PERSONAL/' . $letter['Employee']['code'] . '/LETTERS/' .$letter['Letter']['digital_file'];
                    ?>" target="_blank">Si</a>
                <?php } ?>
            </td>
            <td class="css-td_perfect_fit">
                <a href='javascript:void(0)'
                   id="crud_action"
                   type="letters"
                   id_type="<?php echo $letter['Letter']['id']; ?>"
                   class="css-action_button css-mini_action_button"
                >Modificar</a>

                <a href='javascript:void(0)'
                   id="crud_action"
                   type="letters"
                   action="delete"
                   id_type="<?php echo $letter['Letter']['id']; ?>"
                   class="css-action_button css-mini_action_button css-delete_button"
                >Eliminar</a>
            </td>
        </tr>
    <?php }} ?>
</table>