<?php setlocale(LC_ALL,"es_ES@euro","es_ES","esp"); ?>
<div class="container">
	<h2>
		<?php echo __('Marcaciones: (Asignar)'); ?>
	</h2>
	<div class="row-fluid show-grid" id="tab_user_manager">
		<div class="span12">
			<ul class="nav nav-tabs">
                               <?php if ($this->Acl->check('Asignacions','index','Turno') == true){?>
                                    <li><?php echo $this->Html->link(__('Asignacion'), array('plugin' => 'turno','controller' => 'asignacions','action' => 'index')); ?></li>
                            <?php }?>
                            <?php if ($this->Acl->check('Rolturnos','turno','Turno') == true){?>
                            <li>
                                    <a href="#" data-toggle="dropdown"	class="dropdown-toggle"><?php echo __('Rol de Turnos'); ?> <b	class="caret"></b></a>
                                    <ul class="dropdown-menu">
                                            <li><?php echo $this->Html->link(__('Personal con Horarios Fijos'), array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno/fijo')); ?></li>
                                            <li><?php echo $this->Html->link(__('Personal con Rol de Turnos'), array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno/var')); ?></li>
                                    </ul></li>
                            <?php }?>
                           <?php if ($this->Acl->check('Marcaciones','index','Turno') == true){?>
                                    <li class="active"><?php echo $this->Html->link(__('Marcaciones'), array('plugin' => 'turno','controller' => 'marcaciones','action' => 'index')); ?></li>
                            <?php }?>
			</ul>
		</div>
	</div>	
    <div class="row-fluid show-grid">
	<div class="span12">
	<?php echo $this->Form->create('Numrun',array('class'=>'form-horizontal')); ?>
            <div class="control-group" style="float:right;">
                    <label class="control-label"><?php echo __('Hora de Registro:'); ?><span
                            style="color: red;">*</span> </label>
                    <div class="controls">
                            <?php echo $this->Form->input('CHECKTIME',array('id'=>'CHECKTIME','maxlength'=>'18','type'=>'text','div' => false,'label'=>false,'error'=>false,'class'=>'input-xlarge')); ?>
                    </div>
            </div>
        <div class="form-actions">
            <input type="submit" class="btn btn-primary" value="<?php echo __('Guardar'); ?>" /> 
            <input type="button" class="btn" value="<?php echo __('Cancelar'); ?>" onclick="cancel_add();" />
        </div>
    <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>
<?php echo $this->Html->script(array('jquery.datetimepicker','jquery.ui.datepicker','jquery.ui.datepicker-es'), array('inline' => 'false'));?>
<?php echo $this->Html->css(array('jquery.ui.autocomplete','jquery.datetimepicker','jquery.ui.core','jquery.ui.theme','jquery.ui.datepicker')); ?>
<script type="text/javascript">

$(document).ready(function() {
	$("#CHECKTIME").datetimepicker({
            format: "Y-m-d H:i:00",
            step: 10,
            lang: "es"
        });
});
</script>
