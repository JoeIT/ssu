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
		<?php echo __('Mantenimiento Turnos: (Ver)'); ?>
	</h2>
	<div class="row-fluid show-grid" id="tab_user_manager">
		<div class="span12">
			<ul class="nav nav-tabs">
				<?php if ($this->Acl->check('Categories','index','Article') == true){?>
					<li><?php echo $this->Html->link(__('Category'), array('plugin' => 'article','controller' => 'categories','action' => 'index')); ?></li>
				<?php } ?>
				<?php if ($this->Acl->check('Articles','index','Article') == true){?>
					<li><?php echo $this->Html->link(__('Article'), array('plugin' => 'article','controller' => 'articles','action' => 'index')); ?></li>
				<?php }?>
                                <?php if ($this->Acl->check('Userinfos','index','Article') == true){?>
					<li><?php echo $this->Html->link(__('Trabajadores'), array('plugin' => 'article','controller' => 'userinfos','action' => 'index')); ?></li>
				<?php }?>
                                <?php if ($this->Acl->check('Departments','index','Article') == true){?>
					<li><?php echo $this->Html->link(__('Departamentos'), array('plugin' => 'article','controller' => 'departments','action' => 'index')); ?></li>
				<?php }?> 
                                <?php if ($this->Acl->check('Schclas','index','Article') == true){?>
					<li><?php echo $this->Html->link(__('Horarios'), array('plugin' => 'article','controller' => 'schclas','action' => 'index')); ?></li>
				<?php }?> 
                                <?php if ($this->Acl->check('Holidays','index','Article') == true){?>
					<li><?php echo $this->Html->link(__('Horarios'), array('plugin' => 'article','controller' => 'holidays','action' => 'index')); ?></li>
				<?php }?>
                                <?php if ($this->Acl->check('Leaveclas','index','Article') == true){?>
					<li><?php echo $this->Html->link(__('Permisos'), array('plugin' => 'article','controller' => 'leaveclas','action' => 'index')); ?></li>
				<?php }?>
                                <?php if ($this->Acl->check('Numruns','index','Article') == true){?>
					<li class="active"><?php echo $this->Html->link(__('Mant. Turnos'), array('plugin' => 'article','controller' => 'numruns','action' => 'index')); ?></li>
				<?php }?>
			</ul>
		</div>
	</div>
	<div class="row-fluid show-grid">
		<div class="span12">
			<form class="form-horizontal">
				
                                <div class="control-group">
					<label class="control-label"><?php echo __('Detalle: '); ?>
					</label>
					<div class="controls">
						<?php echo $numruns['Numrun']['NAME']; ?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo __('Fecha inicio: '); ?>
					</label>
					<div class="controls">
						<?php echo $numruns['Numrun']['STARTDATE']; ?>
					</div>
				
				</div>
                                <div class="control-group">
					<label class="control-label"><?php echo __('Fecha Final: '); ?>
					</label>
					<div class="controls">
						<?php echo $numruns['Numrun']['ENDDATE']; ?>
                                                <?php 
                                                App::uses('Schcla', 'Article.Model');
                                                $schcla = new Schcla();
                                                $dato=array();$hora=array();
                                                foreach($deil AS $num){
                                                    $sch=$schcla->find('first',array('conditions'=>array('SCHCLASSID' => $num['Numrundeil']['SCHCLASSID'])));
                                                    $hora1=  explode(" ", $num['Numrundeil']['STARTTIME']);
                                                    $hora2=  explode(" ", $num['Numrundeil']['ENDTIME']);
                                                    $dia=$num['Numrundeil']['SDAYS'];
                                                    $dato[]=array(
                                                        'id' => '',
                                                        'title'=>'Turno: '.$sch['Schcla']['SCHNAME'],
                                                        'start'=>''.date("Y-m-d",mktime(0,0,0,date('m'),(date('d')+$dia)-date('w'),date('Y'))).'T'.$hora1[1].'-05:00',
                                                        'end' => ''.date("Y-m-d",mktime(0,0,0,date('m'),(date('d')+$dia)-date('w'),date('Y'))).'T'.$hora2[1].'-05:00',
                                                        'allDay' => 0,
                                                        'url' => '',
                                                        'details' => '',
                                                        'className' => 'Orange'
                                                    );
                                                }
                                                ?>
                                            
					</div>
                                    
				</div>
                                <div class="form-actions">
                                    <?php echo $this->Acl->link(__('Editar'), array('action' => 'edit', $numruns['Numrun']['NUM_RUNID']),array('class'=>'btn  btn-primary')); ?>
                                    <a class="btn " onclick="cancel_add();"><?php echo __('Cancelar'); ?></a>
                                </div>
                                <div id="calendar"></div>
				
			</form>
		</div>
	</div>
</div>
<?php

echo $this->Html->script(array('jquery.ui.datepicker','lang-all','jquery-1.5.min', 'jquery-ui-1.8.9.custom.min', 'fullcalendar.min', 'jquery.qtip-1.0.0-rc3.min'), array('inline' => 'false'));
?>
<script type="text/javascript">
 function cancel_add() {
		window.location = '<?php echo Router::url(array('plugin' => 'article','controller' => 'numruns','action' => 'index')); ?>';
	}
plgFcRoot = '<?php echo $this->Html->url('/'); ?>' + "Article";
$(document).ready(function() {
    // page is now ready, initialize the calendar...
    $('#calendar').fullCalendar({
		header: {
    		left:   '',
    		center: '',
    		right:  ''
		},
		defaultView: 'agendaWeek',
		firstHour: 7,
                allDaySlot: false,
		weekMode: 'variable',
                columnFormat: 'dddd',
                axisFormat:'HH:mm',
                timeFormat: {agenda: 'HH:mm{ - HH:mm}'},
		aspectRatio: 1.8,
                contentHeight: 650,
                dayNames: ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'],
		editable: false,
		events: <?php echo json_encode($dato);?>
    })

});
</script>

