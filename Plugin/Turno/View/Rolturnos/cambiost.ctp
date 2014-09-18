<?php setlocale(LC_ALL,"es_ES@euro","es_ES","esp"); ?>
<div class="container">
    <div> <?php echo $titulo; ?> </div>
    <table style="float: left;" class="table-bordered table-hover list table-condensed table-striped">
            <thead>
                <tr>
                    <th>Nr.</th>
                    <th>Cod.</th>
                    <th>Nombres</th>
                    <th>Dia</th>
                    <th>Horario</th>
                    <th>HoraEnt</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $nro=1;
                foreach ($userinfos AS $user){ ?>
                <tr>
                    <td><?php echo $nro; ?></td>
                    <td><?php echo $user['Userinfo']['SSN']; ?></td>
                    <td><?php echo $user['Userinfo']['Name']; ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php $nro++; } ?>
            </tbody>
    </table>
</div>