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
		<?php echo __('Marcaciones: (Vista General)'); ?>
	</h2>
	<div class="row-fluid show-grid" id="tab_user_manager">
		<div class="span12">
			<ul class="nav nav-tabs">
                            <?php if ($this->Acl->check('Asignacions','index','Turno') == true){?>
                                    <li><?php echo $this->Html->link(__('Asignacion'), array('plugin' => 'turno','controller' => 'asignacions','action' => 'index')); ?></li>
                            <?php }?>
                            <?php if ($this->Acl->check('Rolturnos','index','Turno') == true){?>
                                    <li><?php echo $this->Html->link(__('Turnos'), array('plugin' => 'turno','controller' => 'rolturnos','action' => 'index')); ?></li>
                            <?php }?>
                            <?php if ($this->Acl->check('Rolturnos','turno','Turno') == true){?>
                                <li><?php echo $this->Html->link(__('Horarios Fijos'), array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno')); ?></li>
                            <?php }?>
                            <?php if ($this->Acl->check('Rolturnos','turno1','Turno') == true){?>
                                <li><?php echo $this->Html->link(__('Rol de Turnos'), array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno1')); ?></li>
                            <?php }?>
                           <?php if ($this->Acl->check('Marcaciones','index','Turno') == true){?>
                                    <li class="active"><?php echo $this->Html->link(__('Marcaciones'), array('plugin' => 'turno','controller' => 'marcaciones','action' => 'index')); ?></li>
                            <?php }?>
			</ul>
		</div>
	</div>
    
	<div class="row-fluid show-grid">
		<div class="span12">
			<?php echo $this->Form->create('Marcacione',array('class'=>'form-horizontal')); ?>
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
                                       <?php echo $this->Form->hidden('idd',array('id'=>'idd','type'=>'text','div' => false,'label'=>false,'error'=>false,'class'=>'input-mini1')); ?>
                                    <?php
                                        echo $this->Ajax->autoComplete_ui("Nombres", array(
                                            'source' => array(
                                                'plugin'=>'turno',
                                                'controller' => 'marcaciones',
                                                'action' => 'autoComplete',
                                            ),
                                            'select' => 'function(event, ui){
                                                $("#idd").val(ui.item.id);
                                                $("#botonver").removeAttr("disabled");
                                            }',
                                            'class'=>'input-xlarge texto-upper'
                                        ));
                                    ?>
                                       
                                       <button class="btn btn-success" type="button" id="botonver" disabled="disabled"
                                                onclick="showAddMarcacionPage(<?php echo $userinfo['Userinfo']['USERID'] ?>);">
                                                <i class="icon-plus icon-white"></i>
                                                <?php echo __('Calcular'); ?>
                                        </button>
                                        
                                   </div>
                                </div>
                               <div id="abc" class="control-group">
                                    <label class="control-label"><?php echo __('Marcar:'); ?><span style="color: red;">*</span> </label>
                                   <div class="controls">
                                    <?php echo $this->Form->input('CHECKTIME',array('id'=>'CHECKTIME','maxlength'=>'10','type'=>'text','div' => false,'label'=>false,'error'=>false,'class'=>'input-large')); ?> 
                                       <?php echo $this->Acl->link(__('Agregar'), array('action' => 'add'),array('class'=>'btn btn-medium btn-danger','onclick' =>'addMarcacion();return false;')); ?>
                                       <div id="error01" style=""></div>
                                   </div>
                                </div>
                            <div id="calendario"></div> 
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>

<?php echo $this->Html->script(array('jquery.datetimepicker','jquery.ui.datepicker','jquery.ui.datepicker-es'), array('inline' => 'false'));?>
<?php echo $this->Html->css(array('query.autocomplete','jquery.datetimepicker','jquery.ui.core','jquery.ui.theme','jquery.ui.datepicker')); ?>

<script>
    
function cancel_add() {
    window.location = '<?php echo Router::url(array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno1')); ?>';
}
function addMarcacion() {
    $("#error01").html('');
    if($("#Nombres").val() != '' && $("#CHECKTIME").val() != ''){
     var idd='<input type="hidden" name="data[Checkinout][USERID]" value="'+$("#idd").val()+'" />'
     var hora='<input type="text" name="data[Checkinout][CHECKTIME]" value="'+$("#CHECKTIME").val()+'" />'
    $.sModal({
        image: '<?php echo $this->webroot; ?>img/icons/reloj.png',
        content: '<div id="group_error"></div> <form style="margin:0"><?php echo __('Estas seguro de Agregar marcacion de: '); ?>  <br><b>' + $("#Nombres").val() + '?</b><br><br> Fecha y Hora '+idd+''+hora+'<form>',
        animate: 'fadeDown',
        buttons: [{
            text: ' <?php echo __('Guradar'); ?> ',
            addClass: 'btn-primary',
            click: function(id) {
                $.post('<?php echo Router::url(array('plugin' => 'turno','controller' => 'marcaciones','action' => 'add')); ?>',$('#'+id).find('form').serialize(),function(o){
                        if (o.error == 0){
                                $('#container').load('<?php echo $this->webroot; ?>turno/marcaciones', function() {
                                        $.sModal('close',id);
                                });
                        }else{
                                var str_error = '<div class="alert alert-error">'+
                              '<button data-dismiss="alert" class="close" type="button">×</button>'+
                              '<strong><?php echo __('Error!'); ?></strong> '+o.error_message+
                            '</div>'
                                $('#group_error').html(str_error);
                        }
                },'json');
            }
        }, {
            text: ' <?php echo __('Cancelar'); ?> ',
            click: function(id, data) {
                $.sModal('close', id);
            }
        }]
        });
    }else{
        $("#error01").html('<b style="color:red;">Seleccione Trabajador o fecha</b>');
    }
}
$(document).ready(function(){
              $('#abc').hide();
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
              $("#CHECKTIME").datetimepicker({
                    format:'Y-m-d H:i:s',
                    step:1,
                    lang: 'es'
                });
              $("#botonver").click(function(){
                  if($("#STARTDATE").val() != '' && $("#ENDDATE").val() != ''){
                  $.ajax({
                        type:'POST',
                        async: true,
                        cache: false,
                        url: '<?php echo Router::Url(array('plugin'=>'turno','controller' => 'marcaciones', 'action' => 'marcacion')); ?>/'+$("#STARTDATE").val()+'/'+$("#ENDDATE").val()+'/'+$("#idd").val(),
                        success: function(response) {
                            $("#calendario").html(response);

                        }
                    });
                    }else{
                        $("#calendario").html('<b style="color:red;">Seleccione fechas</b>');
                    }
                    
              });
              /*$("#Nombres").blur(function(){
                  if($("#STARTDATE").val() != "" && $("#ENDDATE").val() != ""){
                      
                        $.ajax({
                            type:'POST',
                            async: true,
                            cache: false,
                            url: '<?php //echo Router::Url(array('plugin'=>'turno','controller' => 'marcaciones', 'action' => 'marcacion')); ?>/'+$("#STARTDATE").val()+'/'+$("#ENDDATE").val()+'/'+$("#idd").val(),
                            success: function(response) {
                                $("#calendario").html(response);
                                
                            }
                        });
                         
                   }else{
                        $("#calendario").html('<b style="color:red;">Seleccione Fecha Inicial</b>');
                   }
              });*/
            
        });
</script>
