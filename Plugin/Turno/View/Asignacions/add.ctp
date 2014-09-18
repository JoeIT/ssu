<?php setlocale(LC_ALL,"es_ES@euro","es_ES","esp"); ?>
<div class="container">
	<h2>
		<?php echo __('Asignar Supervisor: (Asignar)'); ?>
	</h2>
	<div class="row-fluid show-grid" id="tab_user_manager">
		<div class="span12">
			<ul class="nav nav-tabs">
                                <?php if ($this->Acl->check('Asignacions','index','Turno') == true){?>
					<li class="active"><?php echo $this->Html->link(__('Personal'), array('plugin' => 'turno','controller' => 'asignacions','action' => 'index')); ?></li>
				<?php }?>
			</ul>
		</div>
	</div>
	<?php echo $this->Form->create('Asignacion', array('action' => 'add','class'=>' form-signin form-horizontal')); ?>
	<div class="row-fluid show-grid">
		<div class="span12">
			<div class="input-append">
				<?php echo $this->Form->input('filter',array('div' => false,'label'=>false,'placeholder'=>"Buscar Personal",'class'=>'input-xlarge')); ?>
				<button class="btn" type="submit">
					<?php echo __('Buscar'); ?>
				</button>
				<button class="btn" type="button" onclick="cancelSearch();">
					<i class="icon-remove-sign"></i>
				</button>
			</div>
		</div>
	</div>
	
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
                                    <th style="text-align: center; width:150px;"><?php echo $this->Paginator->sort('BIRTHDAY','Fecha Nacimiento'); ?>
                                    </th>
                                    <th style="text-align: center; width:50px;"><?php echo $this->Paginator->sort('TITLE','Nip'); ?>
                                    </th>
                                    <th style="text-align: center; width:50px;"><?php echo __('Sexo'); ?>
                                    </th>
                                    <th style="text-align: center; width:160px;"><?php echo __('Supervisor'); ?>
                                    </th>
                                    <?php if ($this->Acl->check('Asignacions','view','Turno') == true || $this->Acl->check('Asignacions','edit','Turno') == true || $this->Acl->check('Asignacions','delete','Turno') == true){?>
                                    <th style="text-align: center; width: 150px;"><?php echo __('Acciones'); ?>
                                    </th>
                                    <?php } ?>
                                </tr>
                            </thead>
				<?php
                                App::uses('User', 'AuthAcl.Model');
                                $user=new User();
                                $usr=$user->find('all');
                                $opcions=array();
                                foreach ($usr AS $u){
                                    $opcions[$u['User']['id']]=$u['User']['user_name'];
                                }
                            foreach ($asignacions as $asignacion): ?>
				<tr>
                                    <td><?php echo h($asignacion['Userinfo']['USERID']); ?>&nbsp;</td>
                                    <td><?php echo h($asignacion['Userinfo']['Name']); ?>&nbsp;</td>
                                    <td style="text-align: center;"><?php echo h($asignacion['Userinfo']['Badgenumber']); ?></td>
                                    <td><?php echo h(strftime("%d de %B de %Y",strtotime($asignacion['Userinfo']['BIRTHDAY']))); ?>&nbsp;</td>
                                    <td><?php echo $asignacion['Userinfo']['TITLE']; ?>&nbsp;</td>
                                    <td><?php echo $asignacion['Userinfo']['Gender']; ?>&nbsp;</td>
                                    <td><?php 
                                    //echo $asignacion['Userinfo']['STATE']; 
                                    echo $this->Form->select('STATE'.$asignacion['Userinfo']['USERID'],$opcions,array('default'=>$asignacion['Userinfo']['STATE'],'div' => false,'label'=>false,'error'=>false,'class'=>'input-medium','style'=>'height:18px; margin:0px; padding:0px;')); 
                                    ?>&nbsp;</td>
                                    <?php if ($this->Acl->check('Asignacions','view','Turno') == true || $this->Acl->check('Asignacions','edit','Turno') == true || $this->Acl->check('Asignacions','delete','Turno') == true){?>
                                    <td style="text-align: center;">
                                            <?php echo $this->Acl->link(__('Ver'), array('action' => 'view', $asignacion['Userinfo']['USERID']),array('class'=>'btn btn-mini')); ?>
                                            <?php echo $this->Acl->link(__('Editar'), array('action' => 'edit', $asignacion['Userinfo']['USERID']),array('class'=>'btn btn-mini btn-primary')); ?>
                                            <?php echo $this->Acl->link(__('Eliminar'), array('action' => 'delete', $asignacion['Userinfo']['USERID']),array('class'=>'btn btn-mini btn-danger','onclick' =>'delAsignacion("'.h($asignacion['Userinfo']['USERID']).'","'.h($asignacion['Userinfo']['Name']).'");return false;')); ?>
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
    <div class="form-actions">
        <input type="submit" class="btn btn-primary" value="<?php echo __('Guardar'); ?>" /> 
        <input type="button" class="btn" value="<?php echo __('Cancelar'); ?>" onclick="cancel_add();" />
    </div>
    <?php echo $this->Form->end(); ?>
</div>
<script type="text/javascript">
function cancel_add() {
        window.location = '<?php echo Router::url(array('plugin' => 'turno','controller' => 'asignacions','action' => 'index')); ?>';
}
function cancelSearch(){
	removeUserSearchCookie();
	window.location = '<?php echo Router::url(array('plugin' => 'turno','controller' => 'asignacions','action' => 'add')); ?>';
}
function showAddAsignacionPage() {
	window.location = "<?php echo Router::url(array('plugin' => 'turno','controller' => 'asignacions','action' => 'add')); ?>";
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
