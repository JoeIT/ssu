<?php
if( count($certificatesList) > 0){
?>
<h3>CERTIFICADOS Y TITULOS</h3>

<table border="1" class="css-index_table">
    <tr>
        <th>FECHA</th>
        <th>TITULO</th>
        <th>INSTITUCION</th>
        <th>UBICACION</th>
        <th>MODALIDAD</th>
        <th>DIGITAL</th>
        <th></th>
    </tr>
    <?php
    foreach  ($certificatesList as $certificate){ ?>
        <tr>
            <td class="css-td_perfect_fit"><?php echo date("d/M/Y", strtotime($certificate['Certificate']['expedition_date']));  ?></td>
            <td><?php echo $certificate['Certificate']['titulation_grade'];  ?></td>
            <td><?php echo $certificate['Certificate']['institution'];  ?></td>
            <td><?php echo $certificate['Certificate']['location'];  ?></td>
            <td><?php echo $CERTIFICATE_PROVISION[$certificate['Certificate']['provision']];  ?></td>
            <td>
                <?php
                if( !empty($certificate['Certificate']['digital_file']) && $certificate['Certificate']['digital_file'] != null ){ ?>
                    <a href="<?php
                    echo '/useraclSQL/file/img/PERSONAL/' . $certificate['Employee']['code'] . '/CERTIFICATES/' .$certificate['Certificate']['digital_file'];
                    ?>" target="_blank">Si</a>
                <?php } ?>
            </td>
            <td class="css-td_perfect_fit">
                <a href='javascript:void(0)'
                   id="crud_action"
                   type="certificates"
                   id_type="<?php echo $certificate['Certificate']['id']; ?>"
                   class="css-action_button css-mini_action_button"
                >Modificar</a>

                <a href='javascript:void(0)'
                   id="crud_action"
                   type="certificates"
                   action="delete"
                   id_type="<?php echo $certificate['Certificate']['id']; ?>"
                   class="css-action_button css-mini_action_button css-delete_button"
                >Eliminar</a>
            </td>
        </tr>
    <?php  }}  ?>
</table>