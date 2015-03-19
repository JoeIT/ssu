<h3 class="css-employee_title3">RESULTADOS DE BUSQUEDA</h3>
<table align="center" class="css-index_table css-search_result_table">
    <tr>
        <th>Nombre</th>
        <th>Código</th>
        <th>CI</th>
        <th>Género</th>
        <th>Perfil</th>
        <th>Grado profesional</th>
        <th>Años experiencia</th>
    </tr>
    <?php
    if(count($result) == 0)
        echo "<tr><td colspan='10'>NO SE TIENEN RESULTADOS PARA ESTA BUSQUEDA.</td></td></tr>";


    foreach ($result as $employee){ ?>
    <tr>
        <td align="left"><?php echo $employee['Employee']['paternal_surname'] . ' ' . $employee['Employee']['maternal_surname'] . ' ' . $employee['Employee']['name']; ?></td>
        <td>
            <a href="
            <?php echo $this->Html->url(array("controller" => "employees", "action" => "edit", $employee['Employee']['id']), true); ?>
            ">
            <?php echo $employee['Employee']['code']; ?>
            </a>
        </td>

        <td><?php echo $employee['Employee']['ci']; ?></td>
        <td><?php echo $GENDER[$employee['Employee']['gender']]; ?></td>
        <td><?php echo $PROFILE[$employee['Employee']['profile']]; ?></td>
        <td><?php echo $PROFESSIONAL_DEGREE[$employee['Employee']['professional_degree']]; ?></td>
        <td align="right"><?php echo $employee['Employee']['professional_years']; ?></td>
    </tr>

    <?php } ?>
</table>