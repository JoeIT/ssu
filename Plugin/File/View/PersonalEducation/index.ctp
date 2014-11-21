<table border="1">
    <tr>
        <th>TIPO</th>
        <th>FECHA DE EXPEDICION</th>
        <th>DESCRIPCION</th>
        <th>CONTENIDO</th>
    </tr>
    <?php  foreach  ($personalEducationList  as  $info):  ?>
        <tr>
            <td><?php  echo  $info['PersonalEducation']['titulation_grade'];  ?></td>
        </tr>
    <?php  endforeach;  ?>
    <?php  unset($info);  ?>
</table>