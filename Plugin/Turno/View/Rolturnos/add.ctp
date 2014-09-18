<style>
<!--
.form-horizontal .control-label {
	padding-top: 0px;
}
-->
</style>
<div class="container">
	<h2>
		<?php echo __('Horarios Fijos: ( '.$userinfo['Userinfo']['Name'].' )'); ?>
	</h2>
	<div class="row-fluid show-grid" id="tab_user_manager">
		<div class="span12">
			<ul class="nav nav-tabs">
				<?php if ($this->Acl->check('Asignacions','index','Turno') == true){?>
                                        <li><?php echo $this->Html->link(__('Asignacion'), array('plugin' => 'turno','controller' => 'asignacions','action' => 'index')); ?></li>
                                <?php }?>
                                <?php if ($this->Acl->check('Rolturnos','turno','Turno') == true){?>
                                <li class="dropdown active">
                                        <a href="#" data-toggle="dropdown"	class="dropdown-toggle"><?php echo __('Rol de Turnos'); ?> <b	class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                                <li><?php echo $this->Html->link(__('Personal con Horarios Fijos'), array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno/fijo')); ?></li>
                                                <li><?php echo $this->Html->link(__('Personal con Rol de Turnos'), array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno/var')); ?></li>
                                        </ul></li>
                                <?php }?>
                                <?php if ($this->Acl->check('Marcaciones','index','Turno') == true){?>
                                    <li><?php echo $this->Html->link(__('Marcaciones'), array('plugin' => 'turno','controller' => 'marcaciones','action' => 'index')); ?></li>
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
			<?php echo $this->Form->create('Userofrun',array('class'=>'form-horizontal')); ?>
			<?php echo $this->Form->hidden('USERID',array('div' => false,'label'=>false,'error'=>false,'class'=>'input-mini','value'=>$iduser)); ?>	
                        <div class="control-group">
				<label class="control-label"><?php echo __('Fecha Inicio:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('STARTDATE',array('id'=>'STARTDATE','maxlength'=>'18','type'=>'text','div' => false,'label'=>false,'error'=>false,'class'=>'input-mini1')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Fecha Final:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('ENDDATE',array('id'=>'ENDDATE','maxlength'=>'18','type'=>'text','div' => false,'label'=>false,'error'=>false,'class'=>'input-mini1')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Orden:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('ORDER_RUN',array('div' => false,'label'=>false,'error'=>false,'class'=>'input-mini','value'=>$num)); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Horario:'); ?><span
					style="color: red;">*</span></label>
				<div class="controls">
					<?php   App::uses('Numrun', 'Article.Model');
                                                $userModel = new Numrun();
                                                $rs = $userModel->find('all');
                                                $opciones=array(0=>'');
                                                foreach ($rs AS $dpt){
                                                    $opciones[$dpt['Numrun']['NUM_RUNID']]=$dpt['Numrun']['NAME'];
                                                };
                                        echo $this->Form->input('NUM_OF_RUN_ID',array('options'=>$opciones,'id'=>'NUM_OF_RUN_ID','div' => false,'label'=>false,'error'=>false,'class'=>'input-large')); ?>
				</div>
			</div>
                    <div id="calendario"></div>
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
<?php //echo $this->Html->script(array('jquery.ui.datepicker','jquery.ui.datepicker-es','jquery-ui-1.9.2.custom.min'), array('inline' => 'false'));?>
<?php echo $this->Html->script(array('jquery.datetimepicker','jquery.ui.datepicker','jquery.ui.datepicker-es','jquery-ui-1.9.2.custom.min'), array('inline' => 'false'));?>
<?php echo $this->Html->css(array('jquery.datetimepicker','jquery.ui.core','jquery.ui.theme','jquery.ui.datepicker')); ?>
<script>
function cancel_add() {
        window.location = '<?php echo Router::url(array('plugin' => 'turno','controller' => 'rolturnos','action' => 'general/'.$iduser)); ?>';
}
 $(document).ready(function(){
              $("#STARTDATE").datepicker({
                  dateFormat: 'yy-mm-dd',
                  timeFormat: 'HH:mm:ss',
                  minDate: 0,
                  showOn: "button",
                  buttonImage: "../../../img/calendar.png",
                  buttonImageOnly: true,
                  onClose: function( selectedDate ) {
                        $( "#ENDDATE" ).datepicker( "option", "minDate", selectedDate );
                    }
              }).datepicker("setDate", new Date());
              /*$("#STARTDATE").datetimepicker({
                  minDate:0,
                  //format:'d-m-Y',
                  //step:15,
                  lang:'es',
                  onShow:function( ct ){
                    this.setOptions({
                     maxDate:jQuery('#ENDDATE').val()?jQuery('#ENDDATE').val():false
                    })
                   },
                   timepicker:false
              })*/
              $("#ENDDATE").datepicker({
                  dateFormat: 'yy-mm-dd',
                  showOn: "button",
                  buttonImage: "../../../img/calendar.png",
                  buttonImageOnly: true,
                  onClose: function( selectedDate ) {
                        $( "#STARTDATE" ).datepicker( "option", "maxDate", selectedDate );
                  }
              }); 
              /*$("#ENDDATE").datetimepicker({
                  //format:'d/m/Y',
                  //step:15,
                  lang: 'es',
                  onShow:function( ct ){
                    this.setOptions({
                     minDate:jQuery('#STARTDATE').val()?jQuery('#STARTDATE').val():false
                    })
                   },
                   timepicker:false
              });*/
              
              $("#NUM_OF_RUN_ID").change(function(){
                  if($("#NUM_OF_RUN_ID").val()>0 && $("#ENDDATE").val()!=""){
                        jQuery.ajax({
                            type:'POST',
                            async: true,
                            cache: false,
                            url: '<?php echo Router::Url(array('plugin'=>'turno','controller' => 'rolturnos', 'action' => 'horario')); ?>/'+$("#NUM_OF_RUN_ID").val(),
                            success: function(response) {
                                $("#calendario").html(response);
                            }
                        });
                   }else{
                    $("#calendario").html('<b style="color:red;">Seleccione Fecha Final</b>');
                   }
              });
        });
</script>
