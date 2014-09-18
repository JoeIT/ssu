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
		<?php echo __('Usuarios: (Ver)'); ?>
	</h2>
	<div class="row-fluid show-grid" id="tab_user_manager">
		<div class="span12">
			<ul class="nav nav-tabs">
                                <?php if ($this->Acl->check('Userinfos','index','Article') == true){?>
					<li class="active"><?php echo $this->Html->link(__('Usuarios'), array('plugin' => 'article','controller' => 'userinfos','action' => 'index')); ?></li>
				<?php }?>
                                <?php if ($this->Acl->check('Departments','index','Article') == true){?>
					<li><?php echo $this->Html->link(__('Departamentos'), array('plugin' => 'article','controller' => 'departments','action' => 'index')); ?></li>
				<?php }?> 
                                <?php if ($this->Acl->check('Schclas','index','Article') == true){?>
					<li><?php echo $this->Html->link(__('Horarios'), array('plugin' => 'article','controller' => 'schclas','action' => 'index')); ?></li>
				<?php }?> 
                                <?php if ($this->Acl->check('Holidays','index','Article') == true){?>
					<li><?php echo $this->Html->link(__('Feriados'), array('plugin' => 'article','controller' => 'holidays','action' => 'index')); ?></li>
				<?php }?>
                                <?php if ($this->Acl->check('Leaveclas','index','Article') == true){?>
					<li><?php echo $this->Html->link(__('Permisos'), array('plugin' => 'article','controller' => 'leaveclas','action' => 'index')); ?></li>
				<?php }?>
			</ul>
		</div>
	</div>
	<div class="row-fluid show-grid">
		<div class="span12">
			<form class="form-horizontal">
				
                                <div class="control-group">
					<label class="control-label"><?php echo __('Código: '); ?>
					</label>
					<div class="controls">
						<?php echo $userinfo['Userinfo']['Badgenumber']; ?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo __('Nombres: '); ?>
					</label>
					<div class="controls">
						<?php echo h($userinfo['Userinfo']['Name']); ?>
					</div>
				</div>
                            <div class="control-group">
					<label class="control-label"><?php echo __('Sexo: '); ?>
					</label>
					<div class="controls">
						<?php echo $userinfo['Userinfo']['Gender']; ?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo __('CI: '); ?>
					</label>
					<div class="controls">
						<?php echo $userinfo['Userinfo']['TITLE']; ?>
					</div>
				</div>
                                <div class="control-group">
					<label class="control-label"><?php echo __('Pais: '); ?>
					</label>
					<div class="controls">
						<?php echo $userinfo['Userinfo']['MINZU']; ?>
					</div>
				</div>
                                <div class="control-group">
					<label class="control-label"><?php echo __('Fecha de Nacimiento: '); ?>
					</label>
					<div class="controls">
						<?php echo strftime("%d de %B de %Y",strtotime($userinfo['Userinfo']['BIRTHDAY'])); 
                                                //echo $this->Time->format('d F Y',$userinfo['Userinfo']['BIRTHDAY']);
                                                ?>
					</div>
				</div>
                            <div class="control-group">
					<label class="control-label"><?php echo __('Celular: '); ?>
					</label>
					<div class="controls">
						<?php echo $userinfo['Userinfo']['PAGER']; ?>
					</div>
				</div>
                            <div class="control-group">
					<label class="control-label"><?php echo __('Telefono: '); ?>
					</label>
					<div class="controls">
						<?php echo $userinfo['Userinfo']['OPHONE']; ?>
					</div>
				</div>
                                <div class="control-group">
					<label class="control-label"><?php echo __('Direccion:'); ?>
					</label>
					<div class="controls">
						<?php echo $userinfo['Userinfo']['street']; ?>
					</div>
				</div>
                                <div class="control-group">
					<label class="control-label"><?php echo __('Departamento:'); ?>
					</label>
					<div class="controls">
						<?php 
                                                App::uses('Department', 'Article.Model');
                                                $userModel = new Department();
                                                $rs = $userModel->find('first',array('conditions'=>array('DEPTID' => $userinfo['Userinfo']['DEFAULTDEPTID'])));
                                                echo $rs['Department']['DEPTNAME'];
                                                //echo $userinfo['Userinfo']['DEFAULTDEPTID']; ?>
					</div>
				</div>
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
		window.location = '<?php echo Router::url(array('plugin' => 'article','controller' => 'userinfos','action' => 'index')); ?>';
	}
</script>
