<style>
<!--
.form-horizontal .control-label {
	padding-top: 0px;
}
-->
</style>
<div class="container">
	<h2>
		<?php echo __('Mantenimiento Turnos: (Agregar)'); ?>
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
			<?php echo $this->Form->create('Numrun',array('class'=>'form-horizontal')); ?>
			<div class="control-group">
				<label class="control-label"><?php echo __('Detalle:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('NAME',array('div' => false,'label'=>false,'error'=>false,'class'=>'input-large')); ?>
				</div>
			</div>
			<div class="control-group">
				<label class="control-label"><?php echo __('Fecha Inicio:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('STARTDATE',array('id'=>'STARTDATE','maxlength'=>'10','type'=>'text','div' => false,'label'=>false,'error'=>false,'class'=>'input-small')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Fecha Final:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('ENDDATE',array('id'=>'ENDDATE','maxlength'=>'10','type'=>'text','div' => false,'label'=>false,'error'=>false,'class'=>'input-small')); ?>
				</div>
			</div>
                    
			<div class="form-actions">
				<input type="submit" class="btn btn-primary" value="<?php echo __('Guardar'); ?>" /> 
                                <input type="button" class="btn" value="<?php echo __('Cancelar'); ?>"	onclick="cancel_add();" />
			</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
<?php echo $this->Html->script(array('jquery.datetimepicker','jquery.ui.datepicker','jquery.ui.datepicker-es','jquery-ui-1.9.2.custom.min'), array('inline' => 'false'));?>
<?php echo $this->Html->css(array('jquery.datetimepicker','jquery.ui.core','jquery.ui.theme','jquery.ui.datepicker')); ?>
<script>
function cancel_add() {
        window.location = '<?php echo Router::url(array('plugin' => 'article','controller' => 'numruns','action' => 'index')); ?>';
}
$(document).ready(function(){
      $("#STARTDATE").datepicker({
          dateFormat: 'yy-mm-dd',
          timeFormat: 'HH:mm:ss',
          minDate: 0,
          showOn: "button",
          buttonImage: "../../img/calendar.png",
          buttonImageOnly: true,
          onClose: function( selectedDate ) {
                $( "#ENDDATE" ).datepicker( "option", "minDate", selectedDate );
            }
      }).datepicker("setDate", new Date());

      $("#ENDDATE").datepicker({
          dateFormat: 'yy-mm-dd',
          showOn: "button",
          buttonImage: "../../img/calendar.png",
          buttonImageOnly: true,
          onClose: function( selectedDate ) {
                $( "#STARTDATE" ).datepicker( "option", "maxDate", selectedDate );
          }
      }); 

});
</script>
