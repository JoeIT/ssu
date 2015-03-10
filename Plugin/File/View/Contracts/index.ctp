<?php
if( count($contractsList) > 0){
?>
<h3>CONTRATOS DE TRABAJO</h3>

<table border="1" class="css-index_table">
    <tr>
        <th>NUMERO</th>
        <th>INICIO</th>
        <th>FIN</th>
        <th>SERVICIO</th>
        <th>DIGITAL</th>
        <th></th>
    </tr>
    <?php
    foreach ($contractsList  as  $contract){ ?>
        <tr>
            <td><?php echo $contract['Contract']['number'];  ?></td>
            <td class="css-td_perfect_fit"><?php echo date("d/M/Y", strtotime($contract['Contract']['start_date']));  ?></td>
            <td class="css-td_perfect_fit"><?php echo date("d/M/Y", strtotime($contract['Contract']['end_date']));  ?></td>
            <td><?php echo $contract['Contract']['job'];  ?></td>
            <td>
                <?php
                if( !empty($contract['Contract']['digital_file']) && $contract['Contract']['digital_file'] != null ){ ?>
                    <a href="<?php
                    echo '/useraclSQL/file/img/PERSONAL/' . $contract['Employee']['code'] . '/CERTIFICATES/' .$contract['Contract']['digital_file'];
                    ?>" target="_blank">Si</a>
                <?php } ?>
            </td>
            <td class="css-td_perfect_fit">
                <a href='javascript:void(0)'
                   id="crud_action"
                   type="contracts"
                   id_type="<?php echo $contract['Contract']['id']; ?>"
                   class="css-action_button css-mini_action_button"
                >Modificar</a>

                <a href='javascript:void(0)'
                   id="crud_action"
                   type="contracts"
                   action="delete"
                   id_type="<?php echo $contract['Contract']['id']; ?>"
                   class="css-action_button css-mini_action_button css-delete_button"
                >Eliminar</a>
            </td>
        </tr>
    <?php } ?>
    <?php } ?>
</table>