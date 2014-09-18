<style>
<!--
.form-horizontal .control-label {
	padding-top: 0px;
}
-->
</style>
<div class="container">
	<h2>
		<?php echo __('Horarios: (Agregar)'); ?>
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
					<li class="active"><?php echo $this->Html->link(__('Horarios'), array('plugin' => 'article','controller' => 'schclas','action' => 'index')); ?></li>
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
			<?php echo $this->Form->create('Schcla',array('class'=>'form-horizontal')); ?>
			<div class="control-group">
				<label class="control-label"><?php echo __('Detalle:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('SCHNAME',array('div' => false,'label'=>false,'error'=>false,'class'=>'input-large texto-upper')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Hora Ingreso:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('STARTTIME',array('id'=>'STARTTIME','type'=>'text','maxlength'=>'19','div' => false,'label'=>false,'error'=>false,'class'=>'input-medium')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Hora Salida:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('ENDTIME',array('id'=>'ENDTIME','type'=>'text','maxlength'=>'19','div' => false,'label'=>false,'error'=>false,'class'=>'input-medium')); ?>
				</div>
			</div>
                    
                        <div class="control-group">
				<label class="control-label"><?php echo __('Inicio Entrada:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('CHECKINTIME1',array('id'=>'CHECKINTIME1','type'=>'text','maxlength'=>'19','div' => false,'label'=>false,'dateFormat' => 'DMY','timeFormat' =>24,'error'=>false,'class'=>'input-medium')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Final Entrada:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('CHECKINTIME2',array('id'=>'CHECKINTIME2','type'=>'text','maxlength'=>'19','div' => false,'label'=>false,'dateFormat' => 'DMY','timeFormat' =>24,'error'=>false,'class'=>'input-medium')); ?>
				</div>
			</div>
                    
                        <div class="control-group">
				<label class="control-label"><?php echo __('Inicio Salida:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('CHECKOUTTIME1',array('id'=>'CHECKOUTTIME1','type'=>'text','maxlength'=>'19','div' => false,'label'=>false,'dateFormat' => 'DMY','timeFormat' =>24,'error'=>false,'class'=>'input-medium')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Final Salida:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('CHECKOUTTIME2',array('id'=>'CHECKOUTTIME2','type'=>'text','maxlength'=>'19','div' => false,'label'=>false,'dateFormat' => 'DMY','timeFormat' =>24,'error'=>false,'class'=>'input-medium')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Dia Trabajado:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
				<?php $options=array('0.5'=>'0.5','1'=>'1','1.5'=>'1.5','2'=>'2','2.5'=>'2.5','3'=>'3','3.5'=>'3.5','4'=>'4','4.5'=>'4.5','5'=>'5');
                                        echo $this->Form->input('WorkDay',array('options'=>$options,'div' => false,'label'=>false,'error'=>false,'class'=>'input-mini')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Código:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
				<?php 
                                        echo $this->Form->input('SensorID',array('div' => false,'label'=>false,'error'=>false,'class'=>'input-mini')); ?>
				</div>
			</div>
			<div class="form-actions">
				<input type="submit" class="btn btn-primary"
					value="<?php echo __('Guardar'); ?>" /> <input type="button"
					class="btn" value="<?php echo __('Cancelar'); ?>"
					onclick="cancel_add();" />
			</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
<?php echo $this->Html->script(array('jquery.datetimepicker','jquery.ui.datepicker','jquery.ui.datepicker-es','jquery-ui-1.9.2.custom.min'), array('inline' => 'false'));?>
<?php echo $this->Html->css(array('jquery.datetimepicker','jquery.ui.core','jquery.ui.theme','jquery.ui.datepicker')); ?>
<script>
function cancel_add() {
        window.location = '<?php echo Router::url(array('plugin' => 'article','controller' => 'schclas','action' => 'index')); ?>';
}
 $(document).ready(function(){
              $("#STARTTIME").datetimepicker({
                  minDate:0,
                  format:'d-m-Y H:i:00',
                  step:10,
                  lang:'es',
                  onShow:function( ct ){
                    this.setOptions({
                     maxDate:jQuery('#ENDTIME').val()?jQuery('#ENDTIME').val():false
                    })
                   },
                   datepicker: false
              })
              $("#ENDTIME").datetimepicker({
                  format:'d-m-Y H:i:00',
                  step:10,
                  lang: 'es',
                  onShow:function( ct ){
                    this.setOptions({
                     minDate:jQuery('#STARTTIME').val()?jQuery('#STARTTIME').val():false
                    })
                   },
                   datepicker: false
              });
              $("#CHECKINTIME1").datetimepicker({
                    format:'Y-m-d H:i:00',
                    step:10,
                    lang: 'es',
                    datepicker: false
                });
                $("#CHECKINTIME2").datetimepicker({
                    format:'Y-m-d H:i:00',
                    step:10,
                    lang: 'es',
                    datepicker: false
                });
                $("#CHECKOUTTIME1").datetimepicker({
                    format:'Y-m-d H:i:00',
                    step:10,
                    lang: 'es',
                    datepicker: false
                });
                $("#CHECKOUTTIME2").datetimepicker({
                    format:'Y-m-d H:i:00',
                    step:10,
                    lang: 'es',
                    datepicker: false
                });
        });
</script>
