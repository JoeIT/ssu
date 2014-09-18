<style>
<!--
.form-horizontal .control-label {
	padding-top: 0px;
}
-->
</style>
<div class="container">
	<h2>
		<?php echo __('Usuarios: (Agregar)'); ?>
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
					<li class="active"><?php echo $this->Html->link(__('Trabajadores'), array('plugin' => 'article','controller' => 'userinfos','action' => 'index')); ?></li>
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
                                <?php if ($this->Acl->check('Numruns','index','Article') == true){?>
					<li><?php echo $this->Html->link(__('Mant. Turnos'), array('plugin' => 'article','controller' => 'numruns','action' => 'index')); ?></li>
				<?php }?>
			</ul>
		</div>
	</div>
	<div class="row-fluid show-grid">
		<div class="span12">
			<?php if (count($errors) > 0){ ?>
			<div class="alert alert-error">
				<button data-dismiss="alert" class="close" type="button">×</button>
                                <?php foreach($errors as $error){ ?>
                                    <?php foreach($error as $er){ ?>
                                        <strong><?php echo __('Error!'); ?> </strong>
                                        <?php echo h($er); ?>
                                        <br />
                                    <?php } ?>
				<?php } ?>
			</div>
			<?php } ?>
			<?php echo $this->Form->create('Userinfo',array('class'=>'form-horizontal')); ?>
			<div class="control-group">
				<label class="control-label"><?php echo __('Código'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('Badgenumber',array('div' => false,'label'=>false,'error'=>false,'class'=>'input-mini','value'=>$max)); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Nombres:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('Name',array('maxlength'=>'40','div' => false,'label'=>false,'error'=>false,'class'=>'input-xxlarge texto-upper')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Sexo:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('Gender',array('options' => array('Masc' => 'Masculino', 'Femen' => 'Femenino'),'div' => false,'label'=>false,'error'=>false,'class'=>'input-medium')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Fecha de Nacimiento:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('BIRTHDAY',array('id'=>'BIRTHDAY','maxlength'=>'10','type'=>'text','div' => false,'label'=>false,'error'=>false,'class'=>'input-small')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Identificacion Personal:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('TITLE',array('div' => false,'label'=>false,'error'=>false,'class'=>'input-small')); ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label"><?php echo __('Pais:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php $opciones=array('BOLIVIA'=>'BOLIVIA', 'BRASIL'=>'BRASIL', 'ARGENTINA'=>'ARGENTINA', 'PERU'=>'PERU');
                                        echo $this->Form->input('MINZU',array('options'=>$opciones,'div' => false,'label'=>false,'error'=>false,'class'=>'input-small')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Celular:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('PAGER',array('div' => false,'label'=>false,'error'=>false,'class'=>'input-small')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Telefono:'); ?></label>
				<div class="controls">
					<?php echo $this->Form->input('OPHONE',array('div' => false,'label'=>false,'error'=>false,'class'=>'input-small')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Dirección:'); ?><span
					style="color: red;">*</span></label>
				<div class="controls">
					<?php echo $this->Form->input('street',array('div' => false,'label'=>false,'error'=>false,'class'=>'input-xxlarge texto-upper')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Departamento:'); ?><span
					style="color: red;">*</span></label>
				<div class="controls">
					<?php   App::uses('Department', 'Article.Model');
                                                $userModel = new Department();
                                                $rs = $userModel->find('all',array('fields'=>array('DEPTID','DEPTNAME'),'order'=>array('Department.SUPDEPTID','Department.DEPTID ASC')));
                                                $opciones=array();
                                                foreach ($rs AS $dpt){
                                                    $opciones[$dpt['Department']['DEPTID']]=$dpt['Department']['DEPTNAME'];
                                                };
                                        echo $this->Form->input('DEFAULTDEPTID',array('options'=>$opciones,'div' => false,'label'=>false,'error'=>false,'class'=>'input-large')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Tipo de Contrato:'); ?><span
					style="color: red;">*</span></label>
				<div class="controls">
					<?php 
                                        $tipoC=array(0=>'Planta',1=>'Contrato',2=>'Suplencias y Req',3=>'Residente',4=>'Internos y Pasantes',5=>'Guardias',6=>'Otros');
                                        echo $this->Form->input('FPHONE',array('options' => $tipoC,'div' => false,'label'=>false,'error'=>false,'class'=>'input-medium')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Tiempo de Trabajo:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php $opciones=array('TC' => 'TIEMPO COMPLETO', 'MT' => 'MEDIO TIEMPO','OO'=>'OTRO');
                                        echo $this->Form->input('CITY',array('options'=>$opciones,'div' => false,'label'=>false,'error'=>false,'class'=>'input-medium')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Estado:'); ?><span
					style="color: red;">*</span></label>
				<div class="controls">
					<?php 
                                        $optiones=array(1=>'Habilitado',0=>'Desabilitado');
                                        echo $this->Form->input('ZIP',array('options' => $optiones,'div' => false,'label'=>false,'error'=>false,'class'=>'input-medium')); ?>
				</div>
			</div>
                        
			<div class="form-actions">
				<input type="submit" class="btn btn-primary"
					value="<?php echo __('Guardar Usuario'); ?>" /> <input type="button"
					class="btn" value="<?php echo __('Cancelar'); ?>"
					onclick="cancel_add();" />
			</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
<?php echo $this->Html->script(array('jquery.ui.autocomplete','jquery.datetimepicker','jquery.ui.datepicker','jquery.ui.datepicker-es','jquery-ui-1.9.2.custom.min'), array('inline' => 'false'));?>
<?php echo $this->Html->css(array('jquery.datetimepicker','jquery.ui.core','jquery.ui.theme','jquery.ui.datepicker')); ?>
<script>
function cancel_add() {
        window.location = '<?php echo Router::url(array('plugin' => 'article','controller' => 'userinfos','action' => 'index')); ?>';
}
$(document).ready(function(){
      $("#BIRTHDAY").datepicker({
          dateFormat: 'yy-mm-dd',
          changeMonth: true,
          changeYear: true,
          showOn: "button",
          buttonImage: "../../img/calendar.png",
          buttonImageOnly: true
      });
});
</script>
