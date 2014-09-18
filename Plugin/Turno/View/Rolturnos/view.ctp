<?php setlocale(LC_ALL,"es_ES@euro","es_ES","esp"); ?>
<style>
<!--
.form-horizontal .control-label {
	padding-top: 0px;
}
-->
</style>
<div class="container">
	<h2>
		<?php echo __('Horarios: (Ver)'); ?>
	</h2>
	<div class="row-fluid show-grid" id="tab_user_manager">
		<div class="span12">
			<ul class="nav nav-tabs">
                            <?php if ($this->Acl->check('Asignacions','index','Turno') == true){?>
                                    <li><?php echo $this->Html->link(__('Asignacion'), array('plugin' => 'turno','controller' => 'asignacions','action' => 'index')); ?></li>
                            <?php }?>
                            <?php if ($this->Acl->check('Rolturnos','index','Turno') == true){?>
                                <li><?php echo $this->Html->link(__('Turnos'), array('plugin' => 'turno','controller' => 'rolturnos','action' => 'index')); ?></li>
                            <?php }?>
                            <?php if ($this->Acl->check('Rolturnos','turno','Turno') == true){?>
                                <li class="active"><?php echo $this->Html->link(__('Horarios Fijos'), array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno')); ?></li>
                            <?php }?>
                            <?php if ($this->Acl->check('Rolturnos','turno1','Turno') == true){?>
                                <li><?php echo $this->Html->link(__('Rol de Turnos'), array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno1')); ?></li>
                            <?php }?>
                            <?php if ($this->Acl->check('Marcaciones','index','Turno') == true){?>
                                    <li><?php echo $this->Html->link(__('Marcaciones'), array('plugin' => 'turno','controller' => 'marcaciones','action' => 'index')); ?></li>
                            <?php }?>
			</ul>
		</div>
	</div>
	<div class="row-fluid show-grid">
		<div class="span12">
			<form class="form-horizontal">
                            <table class="table table-bordered table-hover list table-condensed table-striped">
                                
                                <tbody>
                                    <tr>
                                        <td><?php echo h($userinfo['Userinfo']['Name']); ?></td>
                                        <td><?php echo $userinfo['Userinfo']['Gender']; ?></td>
                                        <td><?php echo $userinfo['Userinfo']['TITLE']; ?></td>
                                        <td><?php echo strftime("%d de %B de %Y",strtotime($userinfo['Userinfo']['BIRTHDAY'])); ?></td>
                                        <td><?php echo $userinfo['Userinfo']['PAGER']; ?></td>
                                        <td><?php echo $userinfo['Userinfo']['OPHONE']; ?></td>
                                        <td><?php echo $userinfo['Userinfo']['street']; ?></td>
                                        <td>
                                            <?php 
                                                App::uses('Department', 'Article.Model');
                                                $userModel = new Department();
                                                $rs = $userModel->find('first',array('conditions'=>array('DEPTID' => $userinfo['Userinfo']['DEFAULTDEPTID'])));
                                                echo $rs['Department']['DEPTNAME'];
                                            ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table class="table table-bordered table-hover list table-condensed table-striped">
                                <thead>
                                    <tr>
                                        <th>Nro.</th>
                                        <th>Dia Inicio</th>
                                        <th>Dia Final</th>
                                        <th>Rol de Turno</th>
                                        <th>Estado</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $fi=date('Y-m-d');$ff=date('Y-m-d'); $cont=0; 
                                    foreach($userofrun AS $runof){ ?>
                                    <tr>
                                        <td><?php echo $runof['ORDER_RUN']; ?></td>
                                        <td><?php echo date('Y-m-d',strtotime($runof['STARTDATE'])); ?></td>
                                        <td><?php echo date('Y-m-d',strtotime($runof['ENDDATE'])); ?></td>
                                        <td><?php
                                        $fi=date('Y-m-d',strtotime($runof['STARTDATE']));
                                        $ff=date('Y-m-d',strtotime($runof['ENDDATE']));
                                        App::uses('Numrun', 'Article.Model');
                                        $nrun = new Numrun();
                                        $rs = $nrun->find('first',array('conditions'=>array('NUM_RUNID' => $runof['NUM_OF_RUN_ID'])));
                                        echo $rs['Numrun']['NAME'];
                                        ?></td>
                                        <td><?php if($cont==0){ echo '<div class="btn btn-mini btn-primary">Activo</div>' ;}else{ echo '<div class="btn btn-mini">No</div>';} ?></td>
                                    </tr>
                                    <?php $cont++; } ?>
                                </tbody>
                            </table>
                            <?php 
                            $dato=array();
                            App::uses('Numrundeil', 'Article.Model');
                            $deiles = new Numrundeil();
                            App::uses('Schcla', 'Article.Model');
                            $schcla = new Schcla();
                            App::uses('Usertempsch', 'Turno.Model');
                            $tempsch = new Usertempsch();
                            
                            $rs = $deiles->find('all',array('conditions'=>array('NUM_RUNID' => $userofrun['Userofrun']['NUM_OF_RUN_ID'])));
                            if($fi < date ("Y-m-d",strtotime ('-2 month',strtotime(date('Y-m-d'))))){
                                $fi=date ("Y-m-d",strtotime ('-2 month',strtotime(date('Y-m-d'))));
                            }
                            $ff=date ("Y-m-d",strtotime ('+2 month',strtotime(date('Y-m-d'))));
                            
                            while(strtotime($fi) <= strtotime($ff)){
                                $ff_i=date ("Y-m-d",strtotime ('+1 day',strtotime($fi)));
                                $dtemp = $tempsch->find('all',array('order'=>'COMETIME ASC','conditions'=>array('SCHCLASSID != '=>-1,'USERID' => $id,'COMETIME BETWEEN ? AND ?'=>array($fi,$ff_i))));
                                 $oop=0;
                                foreach($rs AS $num){
                                    $dtemp1 = $dtemp[$oop];
                                    $hdtemp = explode(" ", $dtemp1['Usertempsch']['COMETIME']);
                                    $hora1 =  explode(" ", $num['Numrundeil']['STARTTIME']);
                                    $hora2 =  explode(" ", $num['Numrundeil']['ENDTIME']);
                                    $dia=$num['Numrundeil']['SDAYS'];
                                    if($fi==$hdtemp[0] && !empty($dtemp1) && $dia==date('N',strtotime($hdtemp[0]))){
                                        $idsch=$dtemp1['Usertempsch']['SCHCLASSID'];
                                        $sch=$schcla->find('first',array('conditions'=>array('SCHCLASSID' => $idsch)));
                                        $hora1=  explode(" ", $sch['Schcla']['STARTTIME']);
                                        $hora2=  explode(" ", $sch['Schcla']['ENDTIME']);
                                        $horai=$hora1[1]; $horaf=$hora2[1];
                                        $oop++;
                                    }else{
                                        $idsch=$num['Numrundeil']['SCHCLASSID'];
                                        $sch=$schcla->find('first',array('conditions'=>array('SCHCLASSID' => $idsch)));
                                        $horai=$hora1[1]; $horaf=$hora2[1];
                                    }
                                    
                                    $dato[]=array(
                                        'id' => '',
                                        'title'=>'Turno: '.$sch['Schcla']['SCHNAME'],
                                        'start'=>''.date("Y-m-d",mktime(0,0,0,date('m',strtotime($fi)),(date('d',strtotime($fi))+$dia)-date('w',strtotime($fi)),date('Y',strtotime($fi)))).'T'.$horai.'-05:00',
                                        'end' => ''.date("Y-m-d",mktime(0,0,0,date('m',strtotime($fi)),(date('d',strtotime($fi))+$dia)-date('w',strtotime($fi)),date('Y',strtotime($fi)))).'T'.$horaf.'-05:00',
                                        'allDay' => 0,
                                        'url' => '',
                                        'details' => '',
                                        'className' => 'Blue'
                                    );
                                }
                                $fi = date ("Y-m-d",strtotime ('+7 day',strtotime($fi)));
                            }
                            ?>
                            <div id="calendar"></div>
				<div class="form-actions">
					<?php echo $this->Acl->link(__('Editar'), array('action' => 'edit', $userinfo['Userinfo']['USERID']),array('class'=>'btn  btn-primary')); ?>
					<a class="btn " onclick="cancel_add();"><?php echo __('Cancelar'); ?>
					</a>
				</div>
			</form>
		</div>
	</div>
</div>
<?php echo $this->Html->script(array('jquery.ui.datepicker','lang-all','jquery-1.5.min', 'jquery-ui-1.8.9.custom.min', 'fullcalendar.min', 'jquery.qtip-1.0.0-rc3.min'), array('inline' => 'false'));?>
<script>
function cancel_add() {
    window.location = '<?php echo Router::url(array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno')); ?>';
}
plgFcRoot = '<?php echo $this->Html->url('/'); ?>' + "Turno";
$(document).ready(function() {
    // page is now ready, initialize the calendar...
    $('#calendar').fullCalendar({
		header: {
    		left:   'title',
    		center: '',
    		right:  'today agendaDay,agendaWeek,month prev,next'
		},
                buttonText: {
                    today:' Hoy ',
                    day: 'Dia',
                    month: 'Mes',
                    week: 'Semana'
                },
                timeFormat: {agenda: 'HH:mm{ - HH:mm}','':'HH:mm{ - HH:mm}'},
		defaultView: 'month',
                editable: false,
		firstHour: 7,
                allDaySlot: false,
                columnFormat: 'dddd dd/MMM',
                axisFormat:'HH:mm',
		aspectRatio: 2,
                contentHeight: 950,
                dayNames: ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'],
                monthNamesShort : ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun','Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                monthNames : ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'],
		events: <?php echo json_encode($dato);?>
    })

});
</script>
