<style>
<!--
.form-horizontal .control-label {
	padding-top: 0px;
}
-->
</style>
<div class="container">
	<h2>
		<?php echo __('Departamentos: (Ver)'); ?>
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
					<li class="active"><?php echo $this->Html->link(__('Departamentos'), array('plugin' => 'article','controller' => 'departments','action' => 'index')); ?></li>
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
                                <?php if ($this->Acl->check('Numruns','index','Article') == true){?>
					<li><?php echo $this->Html->link(__('Mant. Turnos'), array('plugin' => 'article','controller' => 'numruns','action' => 'index')); ?></li>
				<?php }?>
			</ul>
		</div>
	</div>
	<div class="row-fluid show-grid">
		<div class="span12">
			<form class="form-horizontal">
				<div class="control-group">
					<label class="control-label"><?php echo __('Id: '); ?>
					</label>
					<div class="controls">
						<?php echo h($department['Department']['DEPTID']); ?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo __('Padre: '); ?>
					</label>
					<div class="controls">
						<?php App::uses('Department', 'Article.Model');   $userModel = new Department();
                                                $rs = $userModel->find('first',array('conditions'=>array('DEPTID' => $department['Department']['SUPDEPTID'])));
                                                echo h($rs['Department']['DEPTNAME']); ?>
					</div>
				</div>
				<div class="control-group">
					<label class="control-label"><?php echo __('Nombre Departamento: '); ?>
					</label>
					<div class="controls">
						<?php echo $department['Department']['DEPTNAME']; ?>
					</div>
				</div>
				<div class="form-actions">
					<?php echo $this->Acl->link(__('Editar'), array('action' => 'edit', $department['Department']['DEPTID']),array('class'=>'btn  btn-primary')); ?>
					<a class="btn " onclick="cancel_add();"><?php echo __('Cancelar'); ?>
					</a>
				</div>
			</form>
		</div>
	</div>
</div>
<script>
	function cancel_add() {
		window.location = '<?php echo Router::url(array('plugin' => 'article','controller' => 'departments','action' => 'index')); ?>';
	}
</script>
