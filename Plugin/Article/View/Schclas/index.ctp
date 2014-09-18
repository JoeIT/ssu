<?php setlocale(LC_ALL,"es_ES@euro","es_ES","esp"); ?>
<div class="container">
	<h2>
		<?php echo __('Horarios: (Inicio)'); ?>
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
					<li class="active"><?php echo $this->Html->link(__('Horarios'), array('plugin' => 'article','controller' => 'schclas','action' => 'index')); ?></li>
				<?php }?> 
                                <?php if ($this->Acl->check('Holidays','index','Article') == true){?>
					<li><?php echo $this->Html->link(__('Feriados'), array('plugin' => 'article','controller' => 'holidays','action' => 'index')); ?></li>
				<?php }?>
                                <?php if ($this->Acl->check('Leaveclas','index','Article') == true){?>
					<li><?php echo $this->Html->link(__('Permisos'), array('plugin' => 'article','controller' => 'leaveclas','action' => 'index')); ?></li>
				<?php }?>
                                <?php if ($this->Acl->check('Numruns','index','Article') == true){?>
					<li><?php echo $this->Html->link(__('Mant. Turnos'), array('plugin' => 'article','controller' => 'numruns','action' => 'index')); ?></li>
				<?php }?>
			</ul>
		</div>
	</div>
	<div class="row-fluid show-grid">
		<?php if ($this->Acl->check('Schclas','add','Article') == true){?>
		<div class="span12" style="text-align: right;">
			<button class="btn btn-success" type="button"
				onclick="showAddSchclaPage();">
				<i class="icon-plus icon-white"></i>
				<?php echo __('Horario'); ?>
			</button>
		</div>
		<?php }?>
	</div>
	<?php echo $this->Form->create('Schcla', array('action' => 'index','class'=>' form-signin form-horizontal')); ?>
	<div class="row-fluid show-grid">
		<div class="span12">
			<div class="input-append">
				<?php echo $this->Form->input('filter',array('div' => false,'label'=>false,'placeholder'=>"Buscar Horario",'class'=>'input-xlarge')); ?>
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
                                    <th style="width: 30px;"><?php echo $this->Paginator->sort('SCHCLASSID','Id'); ?>
                                    </th>
                                    <th style="text-align: center;"><?php echo $this->Paginator->sort('SCHNAME','Nombres'); ?>
                                    </th>
                                    <th style="text-align: center; width:90px;"><?php echo $this->Paginator->sort('STARTTIME','Hora Ingreso'); ?>
                                    </th>
                                    <th style="text-align: center; width:90px;"><?php echo $this->Paginator->sort('ENDTIME','Hora Salida'); ?>
                                    </th>
                                    <th style="text-align: center; width:90px;"><?php echo $this->Paginator->sort('CHECKINTIME1','Inicio Entrada'); ?>
                                    </th>
                                    <th style="text-align: center; width:90px;"><?php echo $this->Paginator->sort('CHECKINTIME2','Final Entrada'); ?>
                                    </th>
                                    <th style="text-align: center; width:90px;"><?php echo $this->Paginator->sort('CHECKOUTTIME1','Inicio Salida'); ?>
                                    </th>
                                    <th style="text-align: center; width:90px;"><?php echo $this->Paginator->sort('CHECKOUTTIME2','Final Salida'); ?>
                                    </th>
                                    <th style="text-align: center; width:90px;"><?php echo $this->Paginator->sort('WorkDay','Dia Trab'); ?>
                                    </th>
                                    <th style="text-align: center; width:60px;"><?php echo $this->Paginator->sort('SensorID','Codigo'); ?>
                                    </th>
                                    <?php if ($this->Acl->check('Schclas','view','Article') == true || $this->Acl->check('Schclas','edit','Article') == true || $this->Acl->check('Schclas','delete','Article') == true){?>
                                    <th style="text-align: center; width: 150px;"><?php echo __('Acciones'); ?>
                                    </th>
                                    <?php } ?>
                                </tr>
                            </thead>
				<?php
                            foreach ($schclas as $schcla): ?>
				<tr>
                                    <td style="text-align: center;"><?php echo h($schcla['Schcla']['SCHCLASSID']); ?>&nbsp;</td>
                                    <td><?php echo h($schcla['Schcla']['SCHNAME']); ?>&nbsp;</td>
                                    <td style="text-align: center;"><?php echo h(substr($schcla['Schcla']['STARTTIME'],11)); ?></td>
                                    <td style="text-align: center;"><?php echo h(substr($schcla['Schcla']['ENDTIME'],11)); ?></td>
                                    <td style="text-align: center;"><?php echo substr($schcla['Schcla']['CHECKINTIME1'],11); ?>&nbsp;</td>
                                    <td style="text-align: center;"><?php echo substr($schcla['Schcla']['CHECKINTIME2'],11); ?>&nbsp;</td>
                                    <td style="text-align: center;"><?php echo substr($schcla['Schcla']['CHECKOUTTIME1'],11); ?>&nbsp;</td>
                                    <td style="text-align: center;"><?php echo substr($schcla['Schcla']['CHECKOUTTIME2'],11); ?>&nbsp;</td>
                                    <td style="text-align: center;"><?php echo $schcla['Schcla']['WorkDay']; ?>&nbsp;</td>
                                    <td style="text-align: center;"><?php echo $schcla['Schcla']['SensorID']; ?>&nbsp;</td>
                                    <?php if ($this->Acl->check('Schclas','view','Article') == true || $this->Acl->check('Schclas','edit','Article') == true || $this->Acl->check('Schclas','delete','Article') == true){?>
                                    <td style="text-align: center;">
                                            <?php echo $this->Acl->link(__('Ver'), array('action' => 'view', $schcla['Schcla']['SCHCLASSID']),array('class'=>'btn btn-mini')); ?>
                                            <?php echo $this->Acl->link(__('Editar'), array('action' => 'edit', $schcla['Schcla']['SCHCLASSID']),array('class'=>'btn btn-mini btn-primary')); ?>
                                            <?php echo $this->Acl->link(__('Eliminar'), array('action' => 'delete', $schcla['Schcla']['SCHCLASSID']),array('class'=>'btn btn-mini btn-danger','onclick' =>'delSchcla("'.h($schcla['Schcla']['SCHCLASSID']).'","'.h($schcla['Schcla']['SCHNAME']).'");return false;')); ?>
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
<script type="text/javascript">
function cancelSearch(){
	removeUserSearchCookie();
	window.location = '<?php echo Router::url(array('plugin' => 'article','controller' => 'schclas','action' => 'index')); ?>';
}
function showAddSchclaPage() {
	window.location = "<?php echo Router::url(array('plugin' => 'article','controller' => 'schclas','action' => 'add')); ?>";
}
function delSchcla(schcla_id, name) {
    $.sModal({
        image: '<?php echo $this->webroot; ?>img/icons/error.png',
        content: '<?php echo __('Estas seguro de Eliminar el registro de: '); ?>  <b>' + name + '</b>?',
        animate: 'fadeDown',
        buttons: [{
            text: ' <?php echo __('Eliminar'); ?> ',
            addClass: 'btn-danger',
            click: function(id, data) {
                $.post('<?php echo Router::url(array('plugin' => 'article','controller' => 'schclas','action' => 'delete')); ?>/' + schcla_id, {}, function(o) {
	                    $('#container').load('<?php echo Router::url(array('plugin' => 'article','controller' => 'schclas','action' => 'index')); ?>', function() {
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
$(document).ready(function() {
	$('.pagination > ul > li').each(function() {
		if ($(this).children('a').length <= 0) {
			var tmp = $(this).html();
			if ($(this).hasClass('Anterior')) {
				$(this).addClass('disabled');
			} else if ($(this).hasClass('Siguiente')) {
				$(this).addClass('disabled');
			} else {
				$(this).addClass('active');
			}
			$(this).html($('<a></a>').append(tmp));
		}
	});
});
</script>
