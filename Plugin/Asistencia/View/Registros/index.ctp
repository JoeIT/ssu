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
		<?php echo __('Marcaciones: (Vista General)'); ?>
	</h2>
	<div class="row-fluid show-grid" id="tab_user_manager">
		<div class="span12">
			<ul class="nav nav-tabs">
                            <?php if ($this->Acl->check('Registros','index','Asistencia') == true){?>
                                    <li class="active"><?php echo $this->Html->link(__('Marcaciones'), array('plugin' => 'asistencia','controller' => 'registros','action' => 'index')); ?></li>
                            <?php }?>
                            <?php if ($this->Acl->check('Spedays','index','Asistencia') == true){?>
                                    <li><?php echo $this->Html->link(__('Permisos'), array('plugin' => 'asistencia','controller' => 'spedays','action' => 'index')); ?></li>
                            <?php }?>
                            <?php if ($this->Acl->check('Reportes','index','Asistencia') == true){?>
                                    <li><?php echo $this->Html->link(__('Reportes'), array('plugin' => 'asistencia','controller' => 'reportes','action' => 'index')); ?></li>
                            <?php }?>
			</ul>
		</div>
	</div>
	<div class="row-fluid show-grid">
		<div class="span12">
			<?php echo $this->Form->create('Registros',array('class'=>'form-horizontal')); ?>
                            <div class="control-group" style="width: 550px;">
                                <div class="control-group" style="float: left;">
                                    <label class="control-label"><?php echo __('Fecha Inicio:'); ?><span
                                                style="color: red;">*</span> </label>
                                    <div class="controls">
                                                <?php echo $this->Form->input('STARTDATE',array('id'=>'STARTDATE','maxlength'=>'18','type'=>'text','div' => false,'label'=>false,'error'=>false,'class'=>'input-mini1')); ?>
                                        </div>
                                </div>
                                <div class="control-group" style="float:right;">
                                        <label class="control-label"><?php echo __('Fecha Final:'); ?><span
                                                style="color: red;">*</span> </label>
                                        <div class="controls">
                                                <?php echo $this->Form->input('ENDDATE',array('id'=>'ENDDATE','maxlength'=>'18','type'=>'text','div' => false,'label'=>false,'error'=>false,'class'=>'input-mini1')); ?>
                                        </div>
                                </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label"><?php echo __('Nombres:'); ?><span style="color: red;">*</span> </label>
                                   <div class="controls">
                                    <?php   
                                    $opciones=array(0=>' TODOS ');
                                    foreach ($userinfos as $userinfo):
                                        $opciones[$userinfo['Userinfo']['USERID']]=$userinfo['Userinfo']['Name'];
                                    endforeach;
                                            echo $this->Form->input('Personal',array('id'=>'Personal','div' => false,'label'=>false,'options' => $opciones, 'class'=>'input-x1large'));   ?>
                                       
                                       <button class="btn btn-success" type="button" id="marcacion" disabled="disabled"
                                                onclick="showAddMarcacionPage(<?php echo $userinfo['Userinfo']['USERID'] ?>);">
                                                <i class="icon-plus icon-white"></i>
                                                <?php echo __('Marcacion'); ?>
                                        </button>
                                        <button class="btn btn-primary" type="button" id="movimiento" disabled="disabled"
                                                onclick="showAddMarcacionPage(<?php echo $userinfo['Userinfo']['USERID'] ?>);">
                                                <i class="icon-plus icon-white"></i>
                                                <?php echo __('Movimiento'); ?>
                                        </button>
                                   </div>
                                </div>
                            <div id="calendario"></div> 
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>

<?php echo $this->Html->script(array('select2','select2_locale_es','jquery.datetimepicker','jquery.ui.datepicker','jquery.ui.datepicker-es'), array('inline' => 'false'));?>
<?php echo $this->Html->css(array('select2','jquery.datetimepicker','jquery.ui.core','jquery.ui.theme','jquery.ui.datepicker')); ?>

<script>
$(document).ready(function(){
        $("#Personal").select2();
        $("#Personal").on("change", function() { $("#marcacion").removeAttr("disabled");$("#movimiento").removeAttr("disabled");});
              $("#STARTDATE").datepicker({
                  dateFormat: 'yy-mm-dd',
                  showOn: "button",
                  buttonImage: "../img/calendar.png",
                  buttonImageOnly: true,
                  onClose: function( selectedDate ) {
                        $( "#ENDDATE" ).datepicker( "option", "minDate", selectedDate );
                    }
              });
              $("#ENDDATE").datepicker({
                    dateFormat: 'yy-mm-dd',
                    showOn: "button",
                    buttonImage: "../img/calendar.png",
                    buttonImageOnly: true,
                    maxDate: '+32d'
                    /*onClose: function( selectedDate ) {
                          $( "#STARTDATE" ).datepicker( "option", "maxDate", selectedDate );
                    }*/
              });
              $("#marcacion").click(function(){
                  if($("#STARTDATE").val() != '' && $("#ENDDATE").val() != ''){
                  $.ajax({
                        type:'POST',
                        async: true,
                        cache: false,
                        url: '<?php echo Router::Url(array('plugin'=>'asistencia','controller' => 'registros', 'action' => 'marcacion')); ?>/'+$("#STARTDATE").val()+'/'+$("#ENDDATE").val()+'/'+$("#Personal").val(),
                        success: function(response) {
                            $("#calendario").html(response);

                        }
                    });
                    }else{
                        $("#calendario").html('<b style="color:red;">Seleccione fechas</b>');
                    }
                    
              });
              $("#movimiento").click(function(){
                  if($("#STARTDATE").val() != '' && $("#ENDDATE").val() != ''){
                  $.ajax({
                        type:'POST',
                        async: true,
                        cache: false,
                        url: '<?php echo Router::Url(array('plugin'=>'asistencia','controller' => 'registros', 'action' => 'movimiento')); ?>/'+$("#STARTDATE").val()+'/'+$("#ENDDATE").val()+'/'+$("#Personal").val(),
                        success: function(response) {
                            $("#calendario").html(response);

                        }
                    });
                    }else{
                        $("#calendario").html('<b style="color:red;">Seleccione fechas</b>');
                    }
                    
              });
        });
</script>
