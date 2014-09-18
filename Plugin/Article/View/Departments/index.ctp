<div class="container">
	<h2>
		<?php echo __('Departamentos: (Inicio)'); ?>
	</h2>
	<div class="row-fluid show-grid" id="tab_user_manager">
		<div class="span12">
			<ul class="nav nav-tabs">
				<?php if ($this->Acl->check('Categories','index','Article') == true){ ?>
					<li><?php echo $this->Html->link(__('Category'), array('plugin' => 'article','controller' => 'categories','action' => 'index')); ?></li>
				<?php } ?>
				<?php if ($this->Acl->check('Articles','index','Article') == true){ ?>
					<li><?php echo $this->Html->link(__('Article'), array('plugin' => 'article','controller' => 'articles','action' => 'index')); ?></li>
				<?php }?>
                                <?php if ($this->Acl->check('Userinfos','index','Article') == true){ ?>
					<li><?php echo $this->Html->link(__('Trabajadores'), array('plugin' => 'article','controller' => 'userinfos','action' => 'index')); ?></li>
				<?php }?>
                                <?php if ($this->Acl->check('Departments','index','Article') == true){ ?>
					<li class="active"><?php echo $this->Html->link(__('Departamentos'), array('plugin' => 'article','controller' => 'departments','action' => 'index')); ?></li>
				<?php }?>
                                <?php if ($this->Acl->check('Schclas','index','Article') == true){?>
					<li><?php echo $this->Html->link(__('Horarios'), array('plugin' => 'article','controller' => 'schclas','action' => 'index')); ?></li>
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
		<?php if ($this->Acl->check('Departments','add','Article') == true){?>
		<div class="span12" style="text-align: right;">
			<button class="btn btn-success" type="button"
				onclick="showAddDepartmentPage();">
				<i class="icon-plus icon-white"></i>
				<?php echo __('Departamentos'); ?>
			</button>
		</div>
		<?php }?>
	</div>
	<?php echo $this->Form->create('Department', array('action' => 'index','class'=>' form-signin form-horizontal')); ?>
	<div class="row-fluid show-grid">
		<div class="span12">
			<div class="input-append">
				<?php echo $this->Form->input('filter',array('div' => false,'label'=>false,'placeholder'=>"Buscar Departamento",'class'=>'input-xlarge')); ?>
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
                                    <th style="width: 30px;"><?php echo $this->Paginator->sort('DEPTID','Id'); ?>
                                    </th>
                                    <th style="text-align: center; width:220px;"><?php echo __('Padre'); ?>
                                    </th>
                                    <th style="text-align: center;"><?php echo $this->Paginator->sort('DEPTNAME','Departamento'); ?>
                                    </th>
                                    <?php if ($this->Acl->check('Departments','view','Article') == true || $this->Acl->check('Departments','edit','Article') == true || $this->Acl->check('Departments','delete','Article') == true){?>
                                    <th style="text-align: center; width: 150px;"><?php echo __('Acciones'); ?>
                                    </th>
                                    <?php } ?>
                                </tr>
                            </thead>
				<?php
	foreach ($departments as $department): ?>
				<tr>
                                    <td><?php echo h($department['Department']['DEPTID']); ?>&nbsp;</td>
                                    <td>
                                        <?php   App::uses('Department', 'Article.Model');   $userModel = new Department();
                                                $rs = $userModel->find('first',array('conditions'=>array('DEPTID' => $department['Department']['SUPDEPTID'])));
                                                echo h($rs['Department']['DEPTNAME']); 
                                         ?></td>
                                    <td><?php echo h($department['Department']['DEPTNAME']); ?>&nbsp;</td>
                                    <?php if ($this->Acl->check('Department','view','Article') == true || $this->Acl->check('Departments','edit','Article') == true || $this->Acl->check('Departments','delete','Article') == true){?>
                                    <td style="text-align: center;">
                                            <?php echo $this->Acl->link(__('Ver'), array('action' => 'view', $department['Department']['DEPTID']),array('class'=>'btn btn-mini')); ?>
                                            <?php echo $this->Acl->link(__('Editar'), array('action' => 'edit', $department['Department']['DEPTID']),array('class'=>'btn btn-mini btn-primary')); ?>
                                            <?php echo $this->Acl->link(__('Eliminar'), array('action' => 'delete', $department['Department']['DEPTID']),array('class'=>'btn btn-mini btn-danger','onclick' =>'delDepartment("'.h($department['Department']['DEPTID']).'","'.h($department['Department']['DEPTNAME']).'");return false;')); ?>
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
	window.location = '<?php echo Router::url(array('plugin' => 'article','controller' => 'departments','action' => 'index')); ?>';
}
function showAddDepartmentPage() {
	window.location = "<?php echo Router::url(array('plugin' => 'article','controller' => 'departments','action' => 'add')); ?>";
}
function delDepartment(department_id, name) {
    $.sModal({
        image: '<?php echo $this->webroot; ?>img/icons/error.png',
        content: '<?php echo __('Estas seguro de Eliminar el registro de: '); ?>  <b>' + name + '</b>?',
        animate: 'fadeDown',
        buttons: [{
            text: ' <?php echo __('Eliminar'); ?> ',
            addClass: 'btn-danger',
            click: function(id, data) {
                $.post('<?php echo Router::url(array('plugin' => 'article','controller' => 'departments','action' => 'delete')); ?>/' + department_id, {}, function(o) {
	                    $('#container').load('<?php echo Router::url(array('plugin' => 'article','controller' => 'departments','action' => 'index')); ?>', function() {
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
            text: ' <?php echo __('Cancel'); ?> ',
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
