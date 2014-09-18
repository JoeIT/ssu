<?php setlocale(LC_ALL,"es_ES@euro","es_ES","esp"); ?>
<div class="container">
<?php //echo $this->Html->script(array('jquery.ui.core','jquery.ui.widget','jquery.ui.position','jquery.ui.menu','jquery.ui.autocomplete'), array('inline' => 'false'));?>
<?php //echo $this->Html->css(array('jquery.ui.autocomplete','jquery-ui')); ?>
    <?php $dias=array("Dom","Lun","Mar","Mie","Jue","Vie","Sab");?>
    <div> Marcaciones </div>
    <table style="float: left;" class="table-bordered table-hover list table-condensed table-striped">
            <thead>
                <tr>
                    <th>Nro.</th>
                    <th>Nombres</th>
                    <th>Fecha</th>
                    <th>Horario</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
        <?php 
        $fechai=$fi;/*
        while(strtotime($fechai) <= strtotime($ff)){
            $dat="";
            if(date("w",strtotime($fechai))==0){
                $dat='style="background: orange;"';
            }elseif( date("w",strtotime($fechai))==6){
                $dat='style="background: gold;"';
            }
            ?>
            <tr>
                <td <?php echo $dat; ?>><?php echo $userinfo['Userinfo']['Badgenumber']; ?></td>
                <td <?php echo $dat; ?>><?php echo date ("d-m-Y",strtotime($fechai)); ?></td>
                <td <?php echo $dat; ?>></td>
            </tr>
  <?php  $fechai = date ("Y-m-d",strtotime ('+1 day',strtotime($fechai))); } */?>
        <?php  foreach ($checkinout AS $check){
            $dat="";
            if(date("w",strtotime($check['Checkinout']['CHECKTIME']))==0){
                $dat='style="background: orange;"';
            }elseif( date("w",strtotime($check['Checkinout']['CHECKTIME']))==6){
                $dat='style="background: gold;"';
            }
            ?>
                
            <tr>
                <td <?php echo $dat; ?>><?php echo $userinfo['Userinfo']['Badgenumber']; ?></td>
                <td <?php echo $dat; ?>><?php echo $userinfo['Userinfo']['Name']; ?></td>
                <td <?php echo $dat; ?>><?php echo date ("d-m-Y",strtotime($check['Checkinout']['CHECKTIME'])); ?></td>
                <td <?php echo $dat; ?>><?php echo date ("H:i:s",strtotime($check['Checkinout']['CHECKTIME'])); ?></td>
                
            </tr>
        <?php } ?>
        
        </tbody>
    </table> 
</div>