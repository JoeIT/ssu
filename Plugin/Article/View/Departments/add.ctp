<style>
<!--
.form-horizontal .control-label {
	padding-top: 0px;
}
-->
</style>
<div class="container">
	<h2>
		<?php echo __('Departamentos: (Agregar)'); ?>
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
			<?php echo $this->Form->create('Department',array('class'=>'form-horizontal')); ?>
			
                        <div class="control-group">
				<label class="control-label"><?php echo __('Padre:'); ?><span
					style="color: red;">*</span></label>
				<div class="controls">
					<?php   App::uses('Department', 'Article.Model');
                                                $userModel = new Department();
                                                $rs = $userModel->find('all',array('fields'=>array('DEPTID','DEPTNAME'),'order'=>array('Department.SUPDEPTID','Department.DEPTID ASC')));
                                                $opciones=array();
                                                foreach ($rs AS $dpt){
                                                    $opciones[$dpt['Department']['DEPTID']]=$dpt['Department']['DEPTNAME'];
                                                };
                                        echo $this->Form->input('SUPDEPTID',array('options'=>$opciones,'div' => false,'label'=>false,'error'=>false,'class'=>'input-large')); ?>
				</div>
			</div>
                        <div class="control-group">
				<label class="control-label"><?php echo __('Nombre Departamento: '); ?><span
					style="color: red;">*</span> </label>
				<div class="controls">
					<?php echo $this->Form->input('DEPTNAME',array('div' => false,'label'=>false,'error'=>false,'class'=>'input-large')); ?>
				</div>
			</div>
			<div class="form-actions">
				<input type="submit" class="btn btn-primary"
					value="<?php echo __('Guardar'); ?>" /> <input type="button"
					class="btn" value="<?php echo __('Cancelar'); ?>"
					onclick="cancel_add();" />
			</div>
			<?php echo $this->Form->end(); ?>
		</div>
	</div>
</div>
<script>
tinyMCE.init({
    // General options
    mode : "exact",
    elements:"DepartmentDepartmentDescription",
    theme : "advanced",
    gecko_spellcheck : true,
    plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks,spellchecker",

    // Theme options
    theme_advanced_buttons1 : "save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
    theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,|,insertdate,inserttime,preview,|,forecolor,backcolor",
    theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,emotions,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
    theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,visualchars,nonbreaking,template,pagebreak,restoredraft,visualblocks",
    theme_advanced_toolbar_location : "top",
    theme_advanced_toolbar_align : "left",
    theme_advanced_statusbar_location : "bottom",
    theme_advanced_resizing : true
});
	function cancel_add() {
		window.location = '<?php echo Router::url(array('plugin' => 'article','controller' => 'departments','action' => 'index')); ?>';
	}
</script>
