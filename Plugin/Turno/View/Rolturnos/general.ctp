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
		<?php echo __('Horarios Fijos: (Vista General)'); ?>
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
		<?php if ($this->Acl->check('Rolturnos','add','Turno') == true){?>
		<div class="span12" style="text-align: right;">
			<button class="btn btn-success" type="button"
				onclick="showAddUserinfoPage();">
				<i class="icon-plus icon-white"></i>
				<?php echo __('Horarios'); ?>
			</button>
		</div>
		<?php }?>
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
                                    <?php $cont=0; 
                                    foreach($userofrun AS $runof){ ?>
                                    <tr>
                                        <td><?php echo $runof['Userofrun']['ORDER_RUN']; ?></td>
                                        <td><?php echo date('d-m-Y',strtotime($runof['Userofrun']['STARTDATE'])); ?></td>
                                        <td><?php echo date('d-m-Y',strtotime($runof['Userofrun']['ENDDATE'])); ?></td>
                                        <td><?php
                                        App::uses('Numrun', 'Article.Model');
                                        $nrun = new Numrun();
                                        $rs = $nrun->find('first',array('conditions'=>array('NUM_RUNID' => $runof['Userofrun']['NUM_OF_RUN_ID'])));
                                        echo $rs['Numrun']['NAME'];
                                        ?></td>
                                        <td><?php if($cont==0){ echo '<div class="btn btn-mini btn-primary">Activo</div>' ;}else{ echo '<div class="btn btn-mini">No</div>';} ?></td>
                                    </tr>
                                    <?php $cont++; } ?>
                                </tbody>
                            </table>
				<div class="form-actions">
					<?php echo $this->Acl->link(__('Editar'), array('action' => 'edit', $userinfo['Userinfo']['USERID']),array('class'=>'btn  btn-primary')); ?>
					<a class="btn " onclick="cancel_add();"><?php echo __('Cancelar'); ?>
					</a>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
function cancel_add() {
    window.location = '<?php echo Router::url(array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno')); ?>';
}
function showAddUserinfoPage() {
	window.location = "<?php echo Router::url(array('plugin' => 'turno','controller' => 'rolturnos','action' => 'add/'.$iduser)); ?>";
}
</script>
