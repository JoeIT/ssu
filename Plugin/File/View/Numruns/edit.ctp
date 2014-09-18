<style>
<!--
.form-horizontal .control-label {
	padding-top: 0px;
}
-->
</style>
<div class="container">
	<h2>
		<?php echo __('Mantenimiento Turnos: (Editar)'); ?>
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
                                <?php echo print_r($errors[0],true); ?>
				<?php foreach($errors as $error){ ?>
                                    <?php foreach($error as $er){ ?>
                                        <strong><?php echo __('Error!'); ?> </strong>
                                        <?php echo print_r($er,true); ?>
                                        <br />
                                    <?php } ?>
				<?php } ?>
			</div>
			<?php } ?>
			<?php echo $this->Form->create('Numrun',array('class'=>'form-horizontal')); ?>
			<?php echo $this->Form->input('NUM_RUNID'); ?>
                        <?php echo $this->Form->hidden('OLDID'); ?>
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
					<?php echo $this->Form->input('STARTDATE',array('id'=>'STARTDATE','maxlength'=>'10','type'=>'text','div' => false,'label'=>false,'error'=>false,'class'=>'input-medium')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Fecha Final:'); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('ENDDATE',array('id'=>'ENDDATE','maxlength'=>'10','type'=>'text','div' => false,'label'=>false,'error'=>false,'class'=>'input-medium datepicker')); ?>
                                    <a style="float: right; " class="btn btn-medium btn-info" onclick='formTurno("<?php echo h($id); ?>");' ><?php echo __('Agegar Turno'); ?></a>
				</div>
			</div>
                    <?php 
                        App::uses('Schcla', 'Article.Model');
                        $schcla = new Schcla();
                        $dato=array();$hora=array();
                        foreach($deil AS $num){
                            $sch=$schcla->find('first',array('conditions'=>array('SCHCLASSID' => $num['Numrundeil']['SCHCLASSID'])));
                            $hora1=  explode(" ", $num['Numrundeil']['STARTTIME']);
                            $hora2=  explode(" ", $num['Numrundeil']['ENDTIME']);
                            $dia=$num['Numrundeil']['SDAYS'];
                            $dato[]=array(
                                'id' => '',
                                'title'=>'Turno: '.$sch['Schcla']['SCHNAME'],
                                'start'=>''.date("Y-m-d",mktime(0,0,0,date('m'),(date('d')+$dia)-date('w'),date('Y'))).'T'.$hora1[1].'-05:00',
                                'end' => ''.date("Y-m-d",mktime(0,0,0,date('m'),(date('d')+$dia)-date('w'),date('Y'))).'T'.$hora2[1].'-05:00',
                                'allDay' => 0,
                                'url' => '',
                                'details' => '',
                                'className' => 'Orange'
                            );
                        }

                        //echo date("w",mktime(0,0,0,date('W'),date('d'),date('Y'))).'-'.date('w');
                        ?>
                    <table class="table table-bordered table-hover list table-condensed table-striped">
                        <thead>
                            <tr>
                                <th colspan="2">Horarios</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="width: 70%;">
                                    <div id="schclas">
                                        <?php 
                                        //foreach($deil AS $num){
                                        App::uses('Schcla', 'Article.Model');
                                        $schc = new Schcla();
                                        $sch=$schc->find('all',array('order'=>'SCHCLASSID ASC'));
                                        App::uses('Numrundeil', 'Article.Model');
                                        $deiles = new Numrundeil();
                                        $rs = $deiles->find('all',array('conditions'=>array('NUM_RUNID' => $id),'fields'=>array('SCHCLASSID'),'group'=>'SCHCLASSID'));
                                        $selected = array();
                                        foreach($rs AS $RSA){
                                            $selected[]=$RSA['Numrundeil']['SCHCLASSID'];
                                        }
                                        //}
                                        $options = array();$dattt='';
                                        foreach ($sch AS $scha){
                                            $dattt=$dattt.'<div><input type="checkbox" name="SCHCLASSID" value="'.$scha['Schcla']['SCHCLASSID'].'">'.$scha['Schcla']['SCHNAME'].'</div>';
                                            $options[$scha['Schcla']['SCHCLASSID']]=$scha['Schcla']['SCHNAME'];
                                        }
                                        echo $this->Form->input('Numrundeil.SCHCLASSID', array('options'=>$options,'multiple' => 'checkbox','selected'=>$selected)); 
                                        ?>
                                    </div>
                                </td>
                                <td>
                                    <div>
                                        <?php 
                                        $rsdia = $deiles->find('all',array('conditions'=>array('NUM_RUNID' => $id),'fields'=>array('SDAYS'),'group'=>'SDAYS'));
                                        
                                        $selec=array();
                                        foreach($rsdia AS $RSAdia){
                                            $selec[]=$RSAdia['Numrundeil']['SDAYS'];
                                        }
                                        $dias='<div><input type="checkbox" name="SDAYS" value="1" checked>Lunes</div><div><input type="checkbox" name="SDAYS" value="2">Martes</div><div><input type="checkbox" name="SDAYS" value="3">Miercoles</div><div><input type="checkbox" name="SDAYS" value="4">Jueves</div><div><input type="checkbox" name="SDAYS" value="5">Viernes</div><div><input type="checkbox" name="SDAYS" value="6">Sabado</div><div><input type="checkbox" name="SDAYS" value="0">Domingo</div>';
                                        $opcion= array(1 => 'Lunes',2 => 'Martes',3 => 'Miercoles',4 => 'Jueves',5 => 'Viernes',6 => 'Sabado',0 => 'Domingo');
                                        echo $this->Form->input('Numrundeil.SDAYS', array('options'=>$opcion, 'multiple' => 'checkbox','selected'=>$selec));
                                    ?></div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
			<div class="form-actions">
				<input type="submit" class="btn btn-primary" value="<?php echo __('Guardar'); ?>" />
                                <input type="button"class="btn" value="<?php echo __('Cancelar'); ?>" onclick="cancel_edit();" />
			</div>
			<?php echo $this->Form->end(); ?>
                    
		</div>
	</div>
</div>

<?php echo $this->Html->script(array('jquery.datetimepicker','jquery.ui.datepicker','jquery.ui.datepicker-es','jquery-ui-1.9.2.custom.min'), array('inline' => 'false'));?>
<?php echo $this->Html->css(array('jquery.datetimepicker','jquery.ui.core','jquery.ui.theme','jquery.ui.datepicker')); ?>
<script>
function cancel_edit() {
        window.location = '<?php echo Router::url(array('plugin' => 'article','controller' => 'numruns','action' => 'index')); ?>';
}
function formTurno(_id){
    var header = "<?php echo __('Agegar Hora'); ?>";
    var horario='<?php echo $dattt; ?>';
    var dias='<?php echo $dias; ?>';
    var Field = '<table class="table table-bordered table-hover list table-condensed table-striped"><thead><tr><th colspan="2">Horarios</th></tr></thead><tbody><tr><td style="width: 70%;"><div id="schclas1">'+horario+'</div></td><td><div>'+dias+'</div></td></tr></tbody></table>';
    
    $.sModal({
        header:header,
        content : '<div id="editDeil_error"></div><form>'+Field+'<form>',
        animate : 'fadeDown',
        buttons : [ {
                text:'&nbsp; <?php echo __('Guardar'); ?> &nbsp;',
                addClass:'btn-primary',
                click : function(id) {
                        $.post('<?php echo Router::url(array('plugin' => 'article','controller' => 'Numruns','action' => 'editDeil')); ?>/' + _id, {}, function(o) {
                            var str_error = '<div class="alert alert-error">'+
	                    	              '<button data-dismiss="alert" class="close" type="button">×</button>'+
	                    	              '<strong><?php echo __('Error!'); ?></strong> yyyyyyyyyy'+
	                    	            '</div>'
                            $('#editDeil_error').html(str_error);
                        },'json');
                    }
                }, {
                text : ' <?php echo __('Cancelar'); ?> ',
                click : function(id, data) {
                        $.sModal('close', id);
                }
        } ]
    });
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
          onClose: function( selectedDate ) {
                $( "#STARTDATE" ).datepicker( "option", "maxDate", selectedDate );
          }
      }); 

});
</script>
