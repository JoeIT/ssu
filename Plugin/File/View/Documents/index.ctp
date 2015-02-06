<h3>DOCUMENTOS PERSONALES</h3>

<table border="1" class="css-index_table">
    <tr>
        <th>DOCUMENTO</th>
        <th>DESCRIPCION</th>
        <th></th>
    </tr>
    <?php
    if( count($documentsList) == 0)
        echo "<tr><td colspan='20' align='center'>NO HAY REGISTROS</td></tr>";

    foreach ($documentsList  as  $document){ ?>
        <tr>
            <td><?php echo $document['Document']['name']; ?></td>
            <td><?php echo $document['Document']['description']; ?></td>
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
    <?php } ?>
</table>