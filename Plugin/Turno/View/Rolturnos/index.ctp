<?php setlocale(LC_ALL,"es_ES@euro","es_ES","esp"); ?>
<?php echo $this->Html->css(array('jquery.ui.autocomplete','jquery-ui')); ?>
<style>
<!--
.form-horizontal .control-label {
	padding-top: 0px;
}
-->
</style>
<div class="container">
	<h2>
		<?php echo __('Turno de Empleados: (Vista General)'); ?>
	</h2>
	<div class="row-fluid show-grid" id="tab_user_manager">
		<div class="span12">
			<ul class="nav nav-tabs">
                            <?php if ($this->Acl->check('Asignacions','index','Turno') == true){?>
                                    <li><?php echo $this->Html->link(__('Asignacion'), array('plugin' => 'turno','controller' => 'asignacions','action' => 'index')); ?></li>
                            <?php }?>
                            <?php if ($this->Acl->check('Rolturnos','index','Turno') == true){?>
                                    <li class="active"><?php echo $this->Html->link(__('Turnos'), array('plugin' => 'turno','controller' => 'rolturnos','action' => 'index')); ?></li>
                            <?php }?>
                            <?php if ($this->Acl->check('Rolturnos','turno','Turno') == true){?>
                                <li><?php echo $this->Html->link(__('Horarios Fijos'), array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno')); ?></li>
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
			<?php echo $this->Form->create('Marcacione',array('class'=>'form-horizontal')); ?>
                            <div class="control-group">
                            <label class="control-label"><?php echo __('Departamento:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php 
                                        App::uses('Department', 'Article.Model');
                                        $userModel = new Department();
                                        $rs = $userModel->query('SELECT d.* FROM DEPARTMENTS d WHERE NOT EXISTS ( SELECT 1 FROM DEPARTMENTS hijo WHERE d.DEPTID=hijo.SUPDEPTID ) ORDER BY d.DEPTID ASC');
                                        $opciones=array(0=>' < Ninguno >');
                                        foreach ($rs AS $dpt){
                                            $opciones[$dpt[0]['DEPTID']]=$dpt[0]['DEPTNAME'];
                                        };
                                        echo $this->Form->input('departamento',array('options'=>$opciones,'id'=>'departamento', 'div'=>false, 'label'=>false, 'error'=>false, 'class'=>'input-large')); 
                                        ?>
				</div>
                            </div>
                            <div id="calendario"></div> 
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
<?php echo $this->Html->script(array('select2','select2_locale_es','jquery.datetimepicker','jquery.ui.datepicker','jquery.ui.datepicker-es','jquery-ui-1.9.2.custom.min'), array('inline' => 'false'));?>
<?php echo $this->Html->css(array('select2','jquery.datetimepicker','jquery.ui.core','jquery.ui.theme','jquery.ui.datepicker')); ?>

<script>
$(document).ready(function(){
    $("#departamento").select2();
    $("#departamento").on("change", function() { 
        if($("#departamento").val() != 0){
            $.ajax({
                type:'POST',
                async: true,
                cache: false,
                url: '<?php echo Router::Url(array('plugin'=>'turno','controller' => 'rolturnos', 'action' => 'cambiost')); ?>/'+$("#departamento").val(),
                success: function(response) {
                    $("#calendario").html(response);

                }
            });
        }else{
            $("#calendario").html('<b style="color:red;">Departamento No valido</b>');
        }
    });
});
</script>
