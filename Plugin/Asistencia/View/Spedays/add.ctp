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
		<?php echo __('Permisos: (Agregar)'); ?>
	</h2>
	<div class="row-fluid show-grid" id="tab_user_manager">
		<div class="span12">
                    <ul class="nav nav-tabs">
                        <?php if ($this->Acl->check('Registros','index','Asistencia') == true){?>
                                <li><?php echo $this->Html->link(__('Marcaciones'), array('plugin' => 'asistencia','controller' => 'registros','action' => 'index')); ?></li>
                        <?php }?>
                       <?php if ($this->Acl->check('Spedays','index','Asistencia') == true){?>
                                <li class="active"><?php echo $this->Html->link(__('Permisos'), array('plugin' => 'asistencia','controller' => 'spedays','action' => 'index')); ?></li>
                        <?php }?>
                        <?php if ($this->Acl->check('Reportes','index','Asistencia') == true){?>
                            <li><?php echo $this->Html->link(__('Reportes'), array('plugin' => 'asistencia','controller' => 'reportes','action' => 'index')); ?></li>
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
			<?php echo $this->Form->create('Speday',array('class'=>'form-horizontal')); ?>
                    
                        <div class="control-group">
                            <label class="control-label"><?php echo __('Departamento:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php 
                                        App::uses('Department', 'Article.Model');
                                        $userModel = new Department();
                                        $rs = $userModel->query('SELECT d.* FROM DEPARTMENTS d WHERE NOT EXISTS ( SELECT 1 FROM DEPARTMENTS hijo WHERE d.DEPTID=hijo.SUPDEPTID ) ORDER BY d.DEPTID ASC');
                                        $opciones=array(0=>' < TODO > ');
                                        foreach ($rs AS $dpt){
                                            $opciones[$dpt[0]['DEPTID']]=$dpt[0]['DEPTNAME'];
                                        };
                                        echo $this->Form->input('departamento',array('options'=>$opciones,'id'=>'departamento','div' => false,'label'=>false,'error'=>false,'class'=>'input-large')); 
                                        ?>
				</div>
			
                            <label class="control-label" style="float: left; "><?php echo __('Nombre:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php 
                                        App::uses('Userinfo', 'Article.Model');
                                        $userModel = new Userinfo();
                                        $rs = $userModel->find('all',array('order'=>'Name ASC','conditions' => array('ZIP' => 1)));
                                        $opcion=array(0=>' < Todo > ');
                                        foreach ($rs AS $dpt){
                                            $opcion[$dpt['Userinfo']['USERID']]=$dpt['Userinfo']['Name'];
                                        };
                                        echo $this->Form->input('personal',array('options'=>$opcion,'id'=>'personal','div' => false,'label'=>false,'error'=>false,'class'=>'input-x1large')); 
                                        ?>
				</div>
			</div>
                    <fieldset> 
                        <legend>Rango de Tiempo:</legend>
                        <div class="control-group">
                            <label class="control-label"><?php echo __('De:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('fechai',array('id'=>'fechai','type'=>'text','maxlength'=>'19','div' => false,'label'=>false,'error'=>false,'class'=>'input-medium')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label" ><?php echo __('_A:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('fechaf',array('id'=>'fechaf','type'=>'text','maxlength'=>'19','div' => false,'label'=>false,'error'=>false,'class'=>'input-medium')); ?>
				</div>
			</div>
                    </fieldset>
                        <div class="control-group">
                            <label class="control-label"><?php echo __('Tipo de Permiso:'); ?><span
                                style="color: red;">*</span> </label>
                            <div class="controls">
                                <?php 
                                    App::uses('Leavecla', 'Article.Model');
                                    $leaveclass = new Leavecla();
                                    $leaveclas=$leaveclass->find('all'); 
                                    $leave=array();
                                    foreach ($leaveclas AS $l):
                                        $leave[$l['Leavecla']['LEAVEID']]=$l['Leavecla']['LEAVENAME'];
                                    endforeach;
                                    echo $this->Form->input('leaveid',array('id'=>'leaveid','div' => false,'label'=>false,'options' => $leave, 'class'=>'input-xlarge'));
                                ?>
                            </div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Motivo:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('detalle',array('div' => false,'label'=>false,'error'=>false,'class'=>'input-xxlarge texto-upper')); ?>
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
<?php echo $this->Html->script(array('select2','select2_locale_es','jquery.datetimepicker','jquery.ui.datepicker','jquery.ui.datepicker-es','jquery-ui-1.9.2.custom.min'), array('inline' => 'false'));?>
<?php echo $this->Html->css(array('select2','jquery.datetimepicker','jquery.ui.core','jquery.ui.theme','jquery.ui.datepicker')); ?>
<script>
function cancel_add() {
        window.location = '<?php echo Router::url(array('plugin' => 'asistencia','controller' => 'spedays','action' => 'index')); ?>';
}
 $(document).ready(function(){
      $("#leaveid").select2();
      $("#departamento").select2();
      $("#personal").select2();
      
      $("#fechai").datetimepicker({
          format:'Y-m-d H:i:00',
          step:1,
          lang:'es'
          /*onShow:function( ct ){
            this.setOptions({
             maxDate:$('#fechaf').val().substring(0,10)?$('#fechaf').val().substring(0,10):false
            })
           }*/
      });
      $("#fechaf").datetimepicker({
          format:'Y-m-d H:i:00',
          step:1,
          lang: 'es'
          /*onShow:function( ct ){
            this.setOptions({
             minDate:$('#fechai').val().substring(0,10)?$('#fechai').val().substring(0,10):false
            })
           }*/
      });

});
</script>
