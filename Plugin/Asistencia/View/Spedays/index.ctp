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
		<?php echo __('Permisos: (Inicio)'); ?>
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
		<?php if ($this->Acl->check('Spedays','add','Asistencia') == true){?>
		<div class="span12" style="text-align: right;">
			<button class="btn btn-success" type="button"
				onclick="showAddPermisosPage();">
				<i class="icon-plus icon-white"></i>
				<?php echo __('Permisos'); ?>
			</button>
		</div>
		<?php }?>
	</div>
	<?php echo $this->Form->create('Spedays', array('action' => 'index','class'=>' form-signin form-horizontal')); ?>
	<div class="row-fluid show-grid">
		<div class="span12">
			<div class="input-append">
				<?php echo $this->Form->input('filter',array('div' => false,'label'=>false,'placeholder'=>"Buscar Detalle",'class'=>'input-xlarge')); ?>
				<button class="btn" type="submit">
					<?php echo __('Buscar'); ?>
				</button>
				<button class="btn" type="button" onclick="cancelSearch();">
					<i class="icon-remove-sign"></i>
				</button>
			</div>
		</div>
	</div>
	<?php echo $this->Form->end(); ?>
	<div class="row-fluid show-grid">
		<div class="span12">
                    <div class="pagination">
                        <ul>
                            <?php
                            echo $this->Paginator->prev('&larr; ' . __('Anterior'),array('tag' => 'li','escape' => false));
                            echo $this->Paginator->numbers(array('separator' => '','tag'=>'li'));
                            echo $this->Paginator->next(__('Siguiente') . ' &rarr;', array('tag' => 'li','escape' => false));
                            ?>
                        </ul>
                    </div>
			<table class="table table-bordered table-hover list table-condensed table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 30px;"><?php echo $this->Paginator->sort('id','Id'); ?>
                                    </th>
                                    <th style="text-align: center; width:250px;"><?php echo $this->Paginator->sort('detalle','Razon'); ?>
                                    </th>
                                    <th style="text-align: center; width:90px;"><?php echo $this->Paginator->sort('fechai','Fecha Inicio'); ?>
                                    </th>
                                    <th style="text-align: center; width:90px;"><?php echo $this->Paginator->sort('fechaf','Fecha Final'); ?>
                                    </th>
                                    <th style="text-align: center; width:90px;"><?php echo $this->Paginator->sort('leaveid','Permiso'); ?>
                                    </th>
                                    <th style="text-align: center; width:90px;"><?php echo $this->Paginator->sort('created','Creado'); ?>
                                    </th>
                                    <?php if ($this->Acl->check('Spedays','view','Asistencia') == true || $this->Acl->check('Spedays','edit','Asistencia') == true || $this->Acl->check('Spedays','delete','Asistencia') == true){?>
                                    <th style="text-align: center; width: 150px;"><?php echo __('Acciones'); ?>
                                    </th>
                                    <?php } ?>
                                </tr>
                            </thead>
				<?php
                            foreach ($spedays as $sped): ?>
				<tr>
                                    <td style="text-align: center;"><?php echo h($sped['Speday']['id']); ?>&nbsp;</td>
                                    <td><?php echo h($sped['Speday']['detalle']); ?>&nbsp;</td>
                                    <td style="text-align: center;"><?php echo h($sped['Speday']['fechai']); ?></td>
                                    <td style="text-align: center;"><?php echo h($sped['Speday']['fechaf']); ?></td>
                                    <td style="text-align: center; color: blue; font-size: x-small; "><?php 
                                        App::uses('Leavecla', 'Article.Model');
                                        $leaveclass = new Leavecla();
                                        $leaveclas=$leaveclass->find('first',array('conditions'=>array('LEAVEID'=>$sped['Speday']['leaveid']))); 
                                    echo h($leaveclas['Leavecla']['LEAVENAME']);
                                    ?>&nbsp;</td>
                                    <td style="text-align: center; font-size: x-small;"><?php echo h($sped['Speday']['created']); ?>&nbsp;</td>
                                    <?php if ($this->Acl->check('Spedays','view','Asistencia') == true || $this->Acl->check('Spedays','edit','Asistencia') == true || $this->Acl->check('Spedays','delete','Asistencia') == true){?>
                                    <td style="text-align: center;">
                                            <?php echo $this->Acl->link(__('Editar'), array('action' => 'edit', $sped['Speday']['id']),array('class'=>'btn btn-mini btn-primary')); ?>
                                            <?php echo $this->Acl->link(__('Eliminar'), array('action' => 'delete', $sped['Speday']['id']),array('class'=>'btn btn-mini btn-danger','onclick' =>'delSpeday("'.h($sped['Speday']['id']).'","'.h($leaveclas['Leavecla']['LEAVENAME']).'","'.h($sped['Speday']['fechai']).'","'.h($sped['Speday']['fechaf']).'");return false;')); ?>
                                    </td>
                                    <?php } ?>
				</tr>
				<?php endforeach; ?>
			</table>
			<p>
			<?php
			echo $this->Paginator->counter(array('format' => __('Página {:page} de {:pages}, Muestra {:current} registros del total de {:count}, a partir del registro {:start}, al {:end}'))); ?>
			</p>
			<div class="pagination">
                            <ul>
                                <?php
                                echo $this->Paginator->prev('&larr; ' . __('Anterior'),array('tag' => 'li','escape' => false));
                                echo $this->Paginator->numbers(array('separator' => '','tag'=>'li'));
                                echo $this->Paginator->next(__('Siguiente') . ' &rarr;', array('tag' => 'li','escape' => false));
                                ?>
                            </ul>
			</div>
		</div>
	</div>
</div>

<?php echo $this->Html->script(array('select2','select2_locale_es','jquery.datetimepicker','jquery.ui.datepicker','jquery.ui.datepicker-es'), array('inline' => 'false'));?>
<?php echo $this->Html->css(array('select2','jquery.datetimepicker','jquery.ui.core','jquery.ui.theme','jquery.ui.datepicker')); ?>
<script type="text/javascript">
function cancelSearch(){
	removeUserSearchCookie();
	window.location = "<?php echo Router::url(array('plugin' => 'asistencia','controller' => 'spedays','action' => 'index')); ?>";
}
function showAddPermisosPage() {
	window.location = "<?php echo Router::url(array('plugin' => 'asistencia','controller' => 'spedays','action' => 'add')); ?>";
}
function delSpeday(speday_id,name,ffi,fff) {
    $.sModal({
        image: '<?php echo $this->webroot; ?>img/icons/error.png',
        content: '<?php echo __('Estas seguro de Borrar Tipo de permiso: '); ?>  <b>' + name + '</b>?<br><br> <span><b>De: </b>' + ffi + ' <br> <b>_A: </b>' + fff + '</span>',
        animate: 'fadeDown',
        buttons: [{
            text: ' <?php echo __('Eliminar'); ?> ',
            addClass: 'btn-danger',
            click: function(id, data) {
                $.post('<?php echo Router::url(array('plugin' => 'asistencia','controller' => 'spedays','action' => 'delete')); ?>/' + speday_id, {}, function(o) {
	                    $('#container').load('<?php echo Router::url(array('plugin' => 'asistencia','controller' => 'spedays','action' => 'index')); ?>', function() {
                        $.sModal('close', id);
                        $('#tab_user_manager').find('a').each(function(){
                    		$(this).click(function(){
                    			removeUserSearchCookie();
                    		});
                    	});
                    });
                }, 'json');
            }
        }, {
            text: ' <?php echo __('Cancelar'); ?> ',
            click: function(id, data) {
                $.sModal('close', id);
            }
        }]
        });
}
</script>
