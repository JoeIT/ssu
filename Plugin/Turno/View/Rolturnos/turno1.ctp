<?php setlocale(LC_ALL,"es_ES@euro","es_ES","esp"); ?>
<div class="container">
	<h2>
		<?php echo __('Horarios con Turnos: (Inicio)'); ?>
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
		<?php if ($this->Acl->check('Asignacions','add','Turno') == true){?>
		<div class="span12" style="text-align: right;">
			<button class="btn btn-success" type="button"
				onclick="showAddAsignacionPage();">
				<i class="icon-plus icon-white"></i>
				<?php echo __('Asignacion'); ?>
			</button>
		</div>
		<?php }?>
	</div>
	<?php echo $this->Form->create('Rolturno', array('action' => 'turno1/'.$type,'class'=>' form-signin form-horizontal')); ?>
	<div class="row-fluid show-grid">
		<div class="span12">
			<div class="input-append">
				<?php echo $this->Form->input('filter',array('div' => false,'label'=>false,'placeholder'=>"Buscar Personal",'class'=>'input-xlarge')); ?>
				<button class="btn" type="submit">
					<?php echo __('Buscar'); ?>
				</button>
				<button class="btn" type="button" onclick="cancelSearch('<?php echo h($type); ?>');">
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
                                    <th style="width: 30px;"><?php echo $this->Paginator->sort('USERID','ID'); ?>
                                    </th>
                                    <th style="text-align: center;"><?php echo $this->Paginator->sort('Name','Nombres'); ?>
                                    </th>
                                    <th style="text-align: center; width:50px;"><?php echo $this->Paginator->sort('Badgenumber','Codigo'); ?>
                                    </th>
                                    <th style="text-align: center; width:160px;"><?php echo $this->Paginator->sort('BIRTHDAY','Fecha Nacimiento'); ?>
                                    </th>
                                    <th style="text-align: center; width:50px;"><?php echo $this->Paginator->sort('TITLE','Nip'); ?>
                                    </th>
                                    <th style="text-align: center; width:50px;"><?php echo __('Sexo'); ?>
                                    </th>
                                    <th style="text-align: center; width:160px;"><?php echo __('Departamento'); ?>
                                    </th>
                                    <th style="text-align: center; width:100px;"><?php echo __('Supervisor'); ?>
                                    </th>
                                    <?php if ($this->Acl->check('Asignacions','supervisor','Turno') == true){?>
                                    <th style="text-align: center; width: 15                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        0px;"><?php echo __('Acciones'); ?>
                                    </th>
                                    <?php } ?>
                                </tr>
                            </thead>
				<?php
                                App::uses('User', 'AuthAcl.Model');
                                $user=new User();
                            foreach ($rolturnos as $rturnos): ?>
				<tr>
                                    <td><?php echo h($rturnos['Userinfo']['USERID']); ?>&nbsp;</td>
                                    <td><?php echo h($rturnos['Userinfo']['Name']); ?>&nbsp;</td>
                                    <td style="text-align: center;"><?php echo h($rturnos['Userinfo']['Badgenumber']); ?></td>
                                    <td><?php echo h(strftime("%d de %B de %Y",strtotime($rturnos['Userinfo']['BIRTHDAY']))); ?>&nbsp;</td>
                                    <td><?php echo $rturnos['Userinfo']['TITLE']; ?>&nbsp;</td>
                                    <td><?php echo $rturnos['Userinfo']['Gender']; ?>&nbsp;</td>
                                    <td><?php 
                                    App::uses('Department', 'Article.Model');
                                    $userModel = new Department();
                                    $rs = $userModel->find('first',array('conditions'=>array('DEPTID' => $rturnos['Userinfo']['DEFAULTDEPTID'])));
                                    echo h($rs['Department']['DEPTNAME']);
                                    ?>&nbsp;</td>
                                    <td><?php 
                                    $usrs=$user->find('first',array('conditions'=>array('id'=>$rturnos['Userinfo']['STATE'])));
                                    echo $usrs['User']['user_name']; 
                                    ?>&nbsp;</td>
                                    <?php if ($this->Acl->check('Rolturnos','view1','Turno') == true || $this->Acl->check('Rolturnos','temporal','Turno') == true || $this->Acl->check('Rolturnos','general1','Turno') == true){?>
                                    <td style="text-align: center;">
                                        <?php echo $this->Acl->link(__('Ver'), array('action' => 'view1', $rturnos['Userinfo']['USERID']),array('class'=>'btn btn-mini')); ?>
                                        <?php echo $this->Acl->link(__('+ A'), array('action' => 'temporal', $rturnos['Userinfo']['USERID']),array('class'=>'btn btn-mini btn-primary')); ?>
                                        <?php echo $this->Acl->link(__('* M'), array('action' => 'modificar', $rturnos['Userinfo']['USERID']),array('class'=>'btn btn-mini btn-primary')); ?>
                                        <?php echo $this->Acl->link(__('- E'), array('action' => 'eliminar', $rturnos['Userinfo']['USERID']),array('class'=>'btn btn-mini btn-danger')); ?>
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
function cancelSearch(tipo){
	removeUserSearchCookie();
	window.location = '<?php echo Router::url(array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno1')); ?>/'+tipo;
}
function showAddAsignacionPage() {
	window.location = "<?php echo Router::url(array('plugin' => 'turno','controller' => 'rolturnos','action' => 'add')); ?>";
}
function delAsignacion(asignacion_id, name) {
    $.sModal({
        image: '<?php echo $this->webroot; ?>img/icons/error.png',
        content: '<?php echo __('Estas seguro de Eliminar el registro de: '); ?>  <b>' + name + '</b>?',
        animate: 'fadeDown',
        buttons: [{
            text: ' <?php echo __('Eliminar'); ?> ',
            addClass: 'btn-danger',
            click: function(id, data) {
                $.post('<?php echo Router::url(array('plugin' => 'turno','controller' => 'asignacions','action' => 'delete')); ?>/' + asignacion_id, {}, function(o) {
	                    $('#container').load('<?php echo Router::url(array('plugin' => 'turno','controller' => 'asignacions','action' => 'index')); ?>', function() {
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
    $('.pagination > ul > li').each(function(){
        if ($(this).children('a').length <= 0){
            var tmp = $(this).html();
            if ($(this).hasClass('Anterior')){
                $(this).addClass('disabled');
            }else if($(this).hasClass('Siguiente')){
                $(this).addClass('disabled');
            }else{
                $(this).addClass('active');
            }
            $(this).html($('<a></a>').append(tmp));
        }
    });
});
</script>
