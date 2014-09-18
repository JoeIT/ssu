<?php setlocale(LC_ALL,"es_ES@euro","es_ES","esp"); ?>
<div class="container">
<?php //echo $this->Html->script(array('jquery.ui.core','jquery.ui.widget','jquery.ui.position','jquery.ui.menu','jquery.ui.autocomplete'), array('inline' => 'false'));?>

    <?php $dias=array("Dom","Lun","Mar","Mie","Jue","Vie","Sab");?>
        <?php 
        $fechai=$fi;
        while(strtotime($fechai) <= strtotime($ff)){
            $dat="";
            if(date("w",strtotime($fechai))==0 || date("w",strtotime($fechai))==6){
                    $dat='style="background: orange;"';
            }
            ?>
    <table style="float: left;" class="table-bordered table-hover list table-condensed table-striped">
        <thead>
            <tr>
                <th <?php echo $dat; ?>><?php 

                    echo $dias[date("w",strtotime($fechai))].'<br>';
                    echo date ("d-m",strtotime($fechai)); ?> </th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td <?php echo $dat; ?>>
                    <?php
                        /*echo $this->Form->hidden("d$fechai",array('id'=>"d$fechai",'type'=>'text','div' => false,'label'=>false,'error'=>false,'class'=>'input-xmini'));
                        echo $this->Ajax->autoComplete_ui("$fechai", array(
                            'source' => array(
                                'plugin'=>'turno',
                                'controller' => 'rolturnos',
                                'action' => 'autoComplete',
                            ),
                            'select' => 'function(event, ui){
                                $("#d'.$fechai.'").val(ui.item.id);
                            }',
                            'class'=>'input-xmini texto-upper'
                        ));*/
                        echo $this->Form->checkbox("$fechai",array('checked'=>'checked'));
                    ?>
                    <?php //echo $this->Form->input("$fechai",array('id'=>"$fechai",'maxlength'=>'5','type'=>'text','div' => false,'label'=>false,'error'=>false,'class'=>'input-xmini')); ?>
                </td>
            </tr>
        </tbody>
    </table>
  <?php  $fechai = date ("Y-m-d",strtotime ('+1 day',strtotime($fechai))); } ?>
</div>