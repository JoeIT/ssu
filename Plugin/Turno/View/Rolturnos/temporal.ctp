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
		<?php echo __('Horarios con Turnos: (Agregar)'); ?>
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
                                <li class="active"><?php echo $this->Html->link(__('Rol de Turnos'), array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno1')); ?></li>
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
                    <?php echo $fia1; ?>
			<?php echo $this->Form->create('Rolturno',array('class'=>'form-horizontal')); ?>
                            <table class="table table-bordered table-hover list table-condensed table-striped">
                                
                                <tbody>
                                    <tr>
                                        <td><?php echo h($userinfo['Userinfo']['Name']); ?></td>
                                        <td><?php echo $userinfo['Userinfo']['Gender']; ?></td>
                                        <td><?php echo $userinfo['Userinfo']['TITLE']; ?></td>
                                        <td><?php echo strftime("%d de %B de %Y",strtotime($userinfo['Userinfo']['BIRTHDAY'])); ?></td>
                                        <td><?php echo $userinfo['Userinfo']['PAGER']; ?></td>
                                        <td><?php echo $userinfo['Userinfo']['OPHONE']; ?></td>
                                        <td><?php echo $userinfo['Userinfo']['street']; ?></td>
                                        <td>
                                            <?php 
                                                App::uses('Department', 'Article.Model');
                                                $userModel = new Department();
                                                $rs = $userModel->find('first',array('conditions'=>array('DEPTID' => $userinfo['Userinfo']['DEFAULTDEPTID'])));
                                                echo $rs['Department']['DEPTNAME'];
                                            ?>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="control-group" style="width: 550px;">
                                <div class="control-group" style="float: left;">
                                    <label class="control-label"><?php echo __('Fecha Inicio:'); ?><span
                                                style="color: red;">*</span> </label>
                                    <div class="controls">
                                        <?php echo $this->Form->hidden('USERID',array('id'=>'USERID','type'=>'text','div' => false,'label'=>false,'error'=>false,'class'=>'input-mini','value'=>$userinfo['Userinfo']['USERID'])); ?>
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
                                <?php
                                App::uses('Schcla', 'Article.Model');
                                $schcla = new Schcla();
                                $rs=$schcla->find('all',array('order'=>'SCHCLASSID ASC'));
                                $options=array();
                                foreach ($rs AS $scha){
                                    $options[$scha['Schcla']['SCHCLASSID']]=$scha['Schcla']['SCHNAME'];
                                }
                                ?>
                                <div class="control-group">
                                    <label class="control-label"><?php echo __('Horario:'); ?><span
                                                style="color: red;">*</span> </label>
                                    <div class="controls">
                                        <?php 
                                    echo $this->Form->hidden("dHorario",array('id'=>"dHorario",'type'=>'text','div' => false,'label'=>false,'error'=>false,'class'=>'input-xmini'));
                                    echo $this->Ajax->autoComplete_ui("Horario", array(
                                                        'source' => array(
                                                            'plugin'=>'turno',
                                                            'controller' => 'rolturnos',
                                                            'action' => 'autoComplete',
                                                        ),
                                                        'select' => 'function(event, ui){
                                                            $("#dHorario").val(ui.item.id);
                                                            
                                                        }',
                                                        'class'=>'input-medium texto-upper'
                                                    ));
                                    ?>
                                    </div>
                                </div>
                            </div>
                            <div id="calendario"></div>              
				<div class="form-actions">
					<input type="submit" class="btn btn-primary" value="<?php echo __('Guardar'); ?>" /> 
					<a class="btn " onclick="cancel_add();"><?php echo __('Cancelar'); ?>
					</a>
				</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
<?php echo $this->Html->script(array('jquery.datetimepicker','jquery.ui.datepicker','jquery.ui.datepicker-es'), array('inline' => 'false'));?>
<?php echo $this->Html->css(array('jquery.ui.autocomplete','jquery.datetimepicker','jquery.ui.core','jquery.ui.theme','jquery.ui.datepicker')); ?>
<script>
function cancel_add() {
    window.location = '<?php echo Router::url(array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno1')); ?>';
}
function showAddUserinfoPage() {
	window.location = "<?php echo Router::url(array('plugin' => 'turno','controller' => 'rolturnos','action' => 'add/'.$iduser)); ?>";
}
$(document).ready(function(){
              $("#STARTDATE").datepicker({
                  dateFormat: 'yy-mm-dd',
                  showOn: "button",
                  buttonImage: "../../../img/calendar.png",
                  buttonImageOnly: true,
                  onClose: function( selectedDate ) {
                        $( "#ENDDATE" ).datepicker( "option", "minDate", selectedDate );
                    }
              });
              $("#ENDDATE").datepicker({
                    dateFormat: 'yy-mm-dd',
                    showOn: "button",
                    buttonImage: "../../../img/calendar.png",
                    buttonImageOnly: true,
                    maxDate: '+32d'
                    /*onClose: function( selectedDate ) {
                          $( "#STARTDATE" ).datepicker( "option", "maxDate", selectedDate );
                    }*/
              });
              $("#Horario").change(function(){
                  if($("#STARTDATE").val() != "" && $("#ENDDATE").val() != ""){
                        $.ajax({
                            type:'POST',
                            async: true,
                            cache: false,
                            url: '<?php echo Router::Url(array('plugin'=>'turno','controller' => 'rolturnos', 'action' => 'hraturno')); ?>/'+$("#STARTDATE").val()+'/'+$("#ENDDATE").val(),
                            success: function(response) {
                                $("#calendario").html(response);
                                $("#Horario").prop("readonly",true);
                            }
                        });
                         
                   }else{
                    $("#calendario").html('<b style="color:red;">Seleccione Fecha Inicial</b>');
                   }
              });
            
        });
</script>
