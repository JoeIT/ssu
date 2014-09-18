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
		<?php echo __('Horarios con Turnos: (<b style="color:red;">Eliminar</b>)'); ?>
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
                                <li><?php echo $this->Html->link(__('Horarios Fijos'), array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno')); ?></li>
                            <?php }?>
                            <?php if ($this->Acl->check('Rolturnos','turno1','Turno') == true){?>
                                <li class="active"><?php echo $this->Html->link(__('Rol de Turnos'), array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno1')); ?></li>
                            <?php }?>
                            <?php if ($this->Acl->check('Marcaciones','index','Turno') == true){?>
                                    <li><?php echo $this->Html->link(__('Marcaciones'), array('plugin' => 'turno','controller' => 'marcaciones','action' => 'index')); ?></li>
                            <?php }?>
			</ul>
		</div>
	</div>
    <?php echo $fia1; ?>
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
                            <?php  
                            App::uses('Schcla', 'Article.Model');
                            $schcla = new Schcla();
                            $dato=array();
                            foreach($usertempsch AS $tempsch){
                                $sch=$schcla->find('first',array('conditions'=>array('SCHCLASSID' => $tempsch['Usertempsch']['SCHCLASSID'])));
                                $hora1=  explode(" ", $tempsch['Usertempsch']['COMETIME']);
                                $hora2=  explode(" ", $tempsch['Usertempsch']['LEAVETIME']);
                                $gg=$tempsch['Usertempsch']['IDEN'];
                                $dato[]=array(
                                    'id' => '',
                                    'title'=>'Turno: '.$sch['Schcla']['SCHNAME'].'',
                                    'start'=>''.date("Y-m-d",strtotime($hora1[0])).'T'.$hora1[1].'-05:00',
                                    'end' => ''.date("Y-m-d",strtotime($hora2[0])).'T'.$hora2[1].'-05:00',
                                    'allDay' => 0,
                                    'url' => Router::url('/') . 'turno/rolturnos/delete/'.$id.'/'.$gg,
                                    'details' => '',
                                    'className' => 'Red'
                                );
                           }
                           echo date('Y-m-d',strtotime('2014-06-06'));
                             ?>
                            
                            <div id="calendar"></div>
				<div class="form-actions">
                                    <?php echo $this->Acl->link(__('Temporal'), array('action' => 'temporal', $id),array('class'=>'btn btn-medium btn-primary')); ?>
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
    window.location = '<?php echo Router::url(array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno1')); ?>';
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
    });

});
</script>
