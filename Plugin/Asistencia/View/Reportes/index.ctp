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
		<?php echo __('Reportes: (Vista General)'); ?>
	</h2>
	<div class="row-fluid show-grid" id="tab_user_manager">
		<div class="span12">
			<ul class="nav nav-tabs">
                            <?php if ($this->Acl->check('Registros','index','Asistencia') == true){?>
                                    <li><?php echo $this->Html->link(__('Marcaciones'), array('plugin' => 'asistencia','controller' => 'registros','action' => 'index')); ?></li>
                            <?php }?>
                            <?php if ($this->Acl->check('Spedays','index','Asistencia') == true){?>
                                    <li><?php echo $this->Html->link(__('Permisos'), array('plugin' => 'asistencia','controller' => 'spedays','action' => 'index')); ?></li>
                            <?php }?>
                            <?php if ($this->Acl->check('Reportes','index','Asistencia') == true){?>
                                    <li class="active"><?php echo $this->Html->link(__('Reportes'), array('plugin' => 'asistencia','controller' => 'reportes','action' => 'index')); ?></li>
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
                                    <label class="control-label"><?php echo __('Tipo Trabajador:'); ?><span style="color: red;">*</span> </label>
                                   <div class="controls">
                                    <?php   
                                        $tipoC=array(0=>'Planta',1=>'Contrato',2=>'Suplencias y Req',3=>'Residente',4=>'Internos y Pasantes',5=>'Guardias',6=>'Otros');
                                            echo $this->Form->input('tipo',array('id'=>'tipo','div' => false,'label'=>false,'options' => $tipoC, 'class'=>'input-x1large'));   ?>
                                       
                                        <button class="btn btn-primary" type="button" id="movimiento"
                                                onclick="showAddMarcacionPage(<?php echo $userinfo['Userinfo']['USERID'] ?>);">
                                                <i class="icon-plus icon-white"></i>
                                                <?php echo __('Generar Reporte'); ?>
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
        $("#tipo").select2();
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
              $("#movimiento").click(function(){
                    if($("#STARTDATE").val() != '' && $("#ENDDATE").val() != ''){
                        if($("#tipo").val()==0){
                            $.ajax({
                                  type:'POST',
                                  async: true,
                                  cache: false,
                                  url: '<?php echo Router::Url(array('plugin'=>'asistencia','controller' => 'reportes', 'action' => 'reporteplanta')); ?>/'+$("#STARTDATE").val()+'/'+$("#ENDDATE").val()+'/'+$("#tipo").val(),
                                  success: function(response) {
                                      $("#calendario").html(response);

                                  }
                              });
                        }else{
                            $.ajax({
                                  type:'POST',
                                  async: true,
                                  cache: false,
                                  url: '<?php echo Router::Url(array('plugin'=>'asistencia','controller' => 'reportes', 'action' => 'reportecontrato')); ?>/'+$("#STARTDATE").val()+'/'+$("#ENDDATE").val()+'/'+$("#tipo").val(),
                                  success: function(response) {
                                      $("#calendario").html(response);

                                  }
                              });
                        }
                  }else{
                      $("#calendario").html('<b style="color:red;">Seleccione fechas</b>');
                  }
                  
              });
        });
</script>
