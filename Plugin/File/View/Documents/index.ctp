<?php
if( count($documentsList) > 0){
?>

<h3>DOCUMENTOS PERSONALES</h3>

<table border="1" class="css-index_table">
    <tr>
        <th>DOCUMENTO</th>
        <th>DESCRIPCION</th>
        <th>DIGITAL</th>
        <th></th>
    </tr>
    <?php
    foreach ($documentsList  as  $document){ ?>
        <tr>
            <td><?php echo $document['Document']['name']; ?></td>
            <td><?php echo $document['Document']['description']; ?></td>
            <td>
                <?php
                if( !empty($document['Document']['digital_file']) && $document['Document']['digital_file'] != null ){ ?>
                <a href="<?php
                echo '/useraclSQL/file/img/PERSONAL/' . $document['Employee']['code'] . '/DOCS/' .$document['Document']['digital_file'];
                ?>" target="_blank">Si</a>
                <?php } ?>
            </td>
            <td class="css-td_perfect_fit">
                <a href='javascript:void(0)'
                   id="crud_action"
                   type="documents"
                   id_type="<?php echo $document['Document']['id']; ?>"
                   class="css-action_button css-mini_action_button"
                >Modificar</a>

                <a href='javascript:void(0)'
                   id="crud_action"
                   type="documents"
                   action="delete"
                   id_type="<?php echo $document['Document']['id']; ?>"
                   class="css-action_button css-mini_action_button css-delete_button"
                >Eliminar</a>
            </td>
        </tr>
    <?php }} ?>
</table>