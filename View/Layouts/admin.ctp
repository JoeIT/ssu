<?php 
$strAction = $this->plugin.$this->name.$this->action;
$menus = array();
$menus['AuthAclAuthAclindex'] = 1;
$menus['AuthAclUsersindex'] = 2; // User menu
$menus['AuthAclUsersadd'] = 2;
$menus['AuthAclUsersview'] = 2;
$menus['AuthAclGroupsindex'] = 2;
$menus['AuthAclPermissionsindex'] = 2;
$menus['AuthAclPermissionsuser'] = 2;
$menus['AuthAclPermissionsuserPermission'] = 2;

$menus['ArticleArticlesindex'] = 3;
$menus['ArticleCategoriesindex'] = 3;

$menus['ArticleAsignacionsindex'] = 3;
$menus['ArticleAsignacionsview'] = 3;
$menus['ArticleAsignacionsadd'] = 3;
$menus['ArticleAsignacionsedit'] = 3;

$menus['ArticleUserinfosindex'] = 3;
$menus['ArticleUserinfosadd'] = 3;
$menus['ArticleUserinfosview'] = 3;
$menus['ArticleUserinfosedit'] = 3;

$menus['ArticleDepartmentsindex'] = 3;
$menus['ArticleDepartmentsview'] = 3;
$menus['ArticleDepartmentsadd'] = 3;
$menus['ArticleDepartmentsedit'] = 3;

$menus['ArticleSchclasindex'] = 3;
$menus['ArticleSchclasview'] = 3;
$menus['ArticleSchclasadd'] = 3;
$menus['ArticleSchclasedit'] = 3;

$menus['AuthAclSettingsindex'] = 4;
$menus['AuthAclSettingsemail'] = 4;
$menus['AuthAclUserseditAccount'] = 5;

$menus['TurnoAsignacionsindex'] = 6;
$menus['TurnoAsignacionsadd'] = 6;
$menus['TurnoAsignacionsview'] = 6;
$menus['TurnoRolturnosindex'] = 6;
$menus['TurnoRolturnosturno'] = 6;
$menus['TurnoRolturnosturno1'] = 6;
$menus['TurnoRolturnosview'] = 6;
$menus['TurnoRolturnosview1'] = 6;
$menus['TurnoRolturnosadd'] = 6;
$menus['TurnoRolturnosgeneral'] = 6;
$menus['TurnoMarcacionesindex'] = 6;

$menus['AsistenciaRegistrosindex'] = 7;
$menus['AsistenciaSpedaysindex'] = 7;
$menus['AsistenciaSpedaysadd'] = 7;
$menus['AsistenciaReportesindex'] = 7;
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<?php echo $this->Html->meta('favicon.ico','img/ssucbba.ico',array('type' => 'icon')); ?>
<title><?php echo __('Seguro Social Universitario'); ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="">
<meta name="author" content="">

<link href="<?php echo $this->webroot; ?>css/template.css" rel="stylesheet">
<link href="<?php echo $this->webroot; ?>bootstrap-modal/css/animate.min.css" rel="stylesheet">
<link href="<?php echo $this->webroot; ?>jquery/jquery-loadmask/jquery.loadmask.css" rel="stylesheet">
<link href="<?php echo $this->webroot; ?>css/jquery-ui-1.11.1.custom.min.css" rel="stylesheet">
<!-- <link href="<?php //echo $this->webroot; ?>css/stylehrms.css" rel="stylesheet"> -->
<?php echo $this->Html->css('fullcalendar'); ?>

<script src="<?php echo $this->webroot; ?>jquery/jquery-1.8.3.js"></script>
<!-- <script src="<?php //echo $this->webroot; ?>js/jquery-ui-1.9.2.custom.min.js"></script> -->
<script src="<?php echo $this->webroot; ?>js/jquery.form.3.51.js"></script>

<script src="<?php echo $this->webroot; ?>jquery/jquery-loadmask/jquery.loadmask.js"></script>
<script src="<?php echo $this->webroot; ?>jquery/jquery.cookie.js"></script>
<script src="<?php echo $this->webroot; ?>bootstrap/js/bootstrap.min.js"></script>
<script src="<?php echo $this->webroot; ?>js/jquery-ui-1.11.1.custom.min.js"></script>
<script src="<?php echo $this->webroot; ?>bootstrap-modal/js/bootstrap.modal.js"></script>
<script src="<?php echo $this->webroot; ?>bootstrap-modal/js/jquery.easing.1.3.js"></script>
<script src="<?php echo $this->webroot; ?>tiny_mce/tiny_mce.js"></script>
<style>
table>thead>tr>th {
	cursor: default;
	text-align: center;
	color: #333333;
	text-shadow: 0 1px 0 #FFFFFF;
	background-color: #e6e6e6;
}

table>thead>tr>th>a {
	color: black;
}
</style>

</head>
<body>

	<div class="navbar navbar-fixed-top" id="mnu_admin_top">
		<div class="navbar-inner">
			<div class="container">
				<button type="button" class="btn btn-navbar" data-toggle="collapse"
					data-target=".nav-collapse">
					<span class="icon-bar"></span> <span class="icon-bar"></span> <span
						class="icon-bar"></span>
				</button>
				<?php //echo $this->Html->link(__('UserAcl'), array('plugin' => 'auth_acl','controller' => 'auth_acl','action' => 'index'),array('class' => 'brand')); ?>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<?php if ($this->Acl->check('AuthAcl','index','AuthAcl') == true){?>
						<li	class="<?php if (isset($menus[$strAction]) && (int)$menus[$strAction] == 1){?> active <?php }?>">
							<?php echo $this->Html->link( __('Inicio'), array('plugin' => 'auth_acl','controller' => 'auth_acl','action' => 'index')); ?>			
						</li>
						<?php } ?>
						<?php if ($this->Acl->check('Users','index','AuthAcl') == true || $this->Acl->check('Groups','index','AuthAcl') == true || $this->Acl->check('Permissions','index','AuthAcl') == true){?>
						<li class="dropdown <?php if (isset($menus[$strAction]) && (int)$menus[$strAction] == 2){?> active <?php }?>"><a
							data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo __('Usuarios'); ?>
								<b class="caret"></b> </a>
							<ul class="dropdown-menu">
								<?php if ($this->Acl->check('Users','index','AuthAcl') == true){?>
									<li><?php echo $this->Html->link(__('User Manager'), array('plugin' => 'auth_acl','controller' => 'users','action' => 'index')); ?></li>
								<?php } ?>
								<?php if ($this->Acl->check('Groups','index','AuthAcl') == true){?>
									<li><?php echo $this->Html->link(__('Groups'), array('plugin' => 'auth_acl','controller' => 'groups','action' => 'index')); ?></li>
								<?php }?>
								<?php if ($this->Acl->check('Permissions','index','AuthAcl') == true){?>
									<li><?php echo $this->Html->link(__('Permissions'), array('plugin' => 'auth_acl','controller' => 'permissions','action' => 'index')); ?></li>
								<?php } ?>
							</ul>
						</li>
						<?php } ?>
						
						<li id="mnu_plugins"
							class="dropdown <?php if (isset($menus[$strAction]) && (int)$menus[$strAction] == 3){?> active <?php }?>"><a
							data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo __('Personal'); ?>
								<b class="caret"></b> </a> <?php if ($this->Acl->check('Articles','index','Article') == true || $this->Acl->check('Categories','index','Article') == true || $this->Acl->check('Asignacions','index','Article') == true || $this->Acl->check('Userinfos','index','Article') == true){?>
							<ul class="dropdown-menu">
								<li class="nav-header"><?php echo __('Personal SSU'); ?></li>
								<?php if ($this->Acl->check('Categories','index','Article') == true){?>
									<li><?php echo $this->Html->link(__('Category'), array('plugin' => 'article','controller' => 'categories','action' => 'index')); ?></li>
								<?php } ?>
								<?php if ($this->Acl->check('Articles','index','Article') == true ){?>
									<li><?php echo $this->Html->link(__('Article'), array('plugin' => 'article','controller' => 'articles','action' => 'index')); ?></li>
								<?php } ?>
                                                                <?php if ($this->Acl->check('Userinfos','index','Article') == true ){?>
									<li><?php echo $this->Html->link(__('Trabajadores'), array('plugin' => 'article','controller' => 'userinfos','action' => 'index')); ?></li>
								<?php } ?>
                                                                <?php if ($this->Acl->check('Departments','index','Article') == true ){?>
									<li><?php echo $this->Html->link(__('Departamentos'), array('plugin' => 'article','controller' => 'departments','action' => 'index')); ?></li>
								<?php } ?>
                                                                <?php if ($this->Acl->check('Schclas','index','Article') == true ){?>
									<li><?php echo $this->Html->link(__('Horarios'), array('plugin' => 'article','controller' => 'schclas','action' => 'index')); ?></li>
								<?php } ?>
                                                                <?php if ($this->Acl->check('Holidays','index','Article') == true ){?>
									<li><?php echo $this->Html->link(__('Feriados'), array('plugin' => 'article','controller' => 'holidays','action' => 'index')); ?></li>
								<?php } ?>
                                                                <?php if ($this->Acl->check('Leaveclas','index','Article') == true ){?>
									<li><?php echo $this->Html->link(__('Permisos'), array('plugin' => 'article','controller' => 'leaveclas','action' => 'index')); ?></li>
								<?php } ?>
                                                                <?php if ($this->Acl->check('Numruns','index','Article') == true ){?>
									<li><?php echo $this->Html->link(__('Mant. Turno'), array('plugin' => 'article','controller' => 'numruns','action' => 'index')); ?></li>
								<?php } ?>
							</ul> <?php } ?>
						</li>
						<?php if ($this->Acl->check('Settings','index','AuthAcl') == true || $this->Acl->check('Settings','email','AuthAcl') == true ){?>
						<li
							class="dropdown<?php if (isset($menus[$strAction]) && (int)$menus[$strAction] == 4){?> active <?php }?>"><a
							data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo __('Configuraciones'); ?>
								<b class="caret"></b> </a>
							<ul class="dropdown-menu">
								<?php if ($this->Acl->check('Settings','index','AuthAcl') == true){?>
									<li><?php echo $this->Html->link(__('General'), array('plugin' => 'auth_acl','controller' => 'settings','action' => 'index')); ?></li>
								<?php }?>
								<?php if ($this->Acl->check('Settings','email','AuthAcl') == true){?>
									<li class="nav-header"><?php echo __('Email templates'); ?></li>
									<li><?php echo $this->Html->link(__('New User'), array('plugin' => 'auth_acl','controller' => 'settings','action' => 'email/new_user')); ?></li>
									<li><?php echo $this->Html->link(__('Reset Password'), array('plugin' => 'auth_acl','controller' => 'settings','action' => 'email/reset_password')); ?></li>
								<?php } ?>
							</ul></li>
						<?php }?>
                                                   <?php if ($this->Acl->check('Asignacions','index','Turno') == true){ ?>
                                                    <li
                                                            class="dropdown<?php if (isset($menus[$strAction]) && (int)$menus[$strAction] == 6){?> active <?php }?>"><a
                                                            data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo __('Turnos'); ?>
                                                                    <b class="caret"></b> </a>
                                                            <ul class="dropdown-menu">
                                                                    <?php if ($this->Acl->check('Asignacions','index','Turno') == true){?>
                                                                            <li><?php echo $this->Html->link(__('Asignacion'), array('plugin' => 'turno','controller' => 'asignacions','action' => 'index')); ?></li>
                                                                    <?php } ?>
                                                                    <?php if ($this->Acl->check('Rolturnos','index','Turno') == true){?>
                                                                            <li><?php echo $this->Html->link(__('Turnos'), array('plugin' => 'turno','controller' => 'rolturnos','action' => 'index')); ?></li>
                                                                    <?php }?>
                                                                    <?php if ($this->Acl->check('Rolturnos','turno','Turno') == true){ ?>
                                                                            <li><?php echo $this->Html->link(__('Horarios Fijos'), array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno')); ?></li>
                                                                            <li><?php echo $this->Html->link(__('Rol de Turnos'), array('plugin' => 'turno','controller' => 'rolturnos','action' => 'turno1')); ?></li>
                                                                    <?php } ?>
                                                                    <?php if ($this->Acl->check('Marcaciones','index','Turno') == true){?>
                                                                            <li><?php echo $this->Html->link(__('Marcaciones'), array('plugin' => 'turno','controller' => 'marcaciones','action' => 'index')); ?></li>
                                                                    <?php } ?> 
                                                            </ul></li>
                                                    <?php } ?>
                                                    <?php if ($this->Acl->check('Registros','index','Asistencia') == true){ ?>
                                                    <li
                                                            class="dropdown<?php if (isset($menus[$strAction]) && (int)$menus[$strAction] == 7){?> active <?php }?>"><a
                                                            data-toggle="dropdown" class="dropdown-toggle" href="#"><?php echo __('Asistencias'); ?>
                                                                    <b class="caret"></b> </a>
                                                            <ul class="dropdown-menu">
                                                                    <?php if ($this->Acl->check('Registros','index','Asistencia') == true){?>
                                                                            <li><?php echo $this->Html->link(__('Marcaciones'), array('plugin' => 'asistencia','controller' => 'registros','action' => 'index')); ?></li>
                                                                    <?php } ?>
                                                                    <?php if ($this->Acl->check('Spedays','index','Asistencia') == true){?>
                                                                            <li><?php echo $this->Html->link(__('Permisos'), array('plugin' => 'asistencia','controller' => 'spedays','action' => 'index')); ?></li>
                                                                    <?php } ?> 
                                                                    <?php if ($this->Acl->check('Reportes','index','Asistencia') == true){?>
                                                                            <li><?php echo $this->Html->link(__('Reportes'), array('plugin' => 'asistencia','controller' => 'reportes','action' => 'index')); ?></li>
                                                                    <?php }?>
                                                            </ul></li>
                                                    <?php } ?>
													
						<!-- INICIO MENU FILES -->
						
						<?php 
						
						if ($this->Acl->check('Files','index','File') == true){?>
						<li class="dropdown <?php if (isset($menus[$strAction]) && (int)$menus[$strAction] == 8){?> active <?php }?>">
							<a data-toggle="dropdown" class="dropdown-toggle" href="#">
								<?php echo __('Files personal'); ?>
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<?php if ($this->Acl->check('Files','index','File') == true){?>
									<li><?php echo $this->Html->link(__('Files'), array('plugin' => 'file','controller' => 'files','action' => 'index')); ?></li>
								<?php } ?>
								<?php if ($this->Acl->check('Employees','index','File') == true){?>
									<li><?php echo $this->Html->link(__('Employees'), array('plugin' => 'file','controller' => 'employees','action' => 'index')); ?></li>
								<?php }?>
							</ul>
						</li>
						<?php } ?>
						
						<!-- FIN MENUS FILES -->
					</ul>
					<ul class="nav pull-right">
						<?php if (!empty($login_user)){ ?>
						<li
							class="dropdown<?php if (isset($menus[$strAction]) && (int)$menus[$strAction] == 5){?> active <?php }?>"><a
							data-toggle="dropdown" class="dropdown-toggle" href="#"> <i
								class="icon icon-user"></i> <?php echo h($login_user['user_name']); ?>
								<b class="caret"></b>
						</a>
							<ul class="dropdown-menu">
								<li><?php echo $this->Html->link(__('<i class="icon-pencil"></i> Editar Cuenta'), array('plugin' => 'auth_acl','controller' => 'users','action' => 'editAccount'),array('escape'=>false)); ?></li>
								<li class="divider"></li>
								<li><?php echo $this->Html->link(__('<i class="icon-minus-sign"></i> Salir'), array('plugin' => 'auth_acl','controller' => 'users','action' => 'logout'),array('escape'=>false)); ?></li>
							</ul></li>
						<?php }else{ ?>
						<li><?php echo $this->Html->link(__('Sign in'), array('plugin' => 'auth_acl','controller' => 'users','action' => 'login')); ?></li>
						</a></li>
						<?php } ?>
					</ul>
				</div>
				<!--/.nav-collapse -->
			</div>
		</div>
	</div>
	<!-- container -->
	<div class="container" id="container">
		<?php 
			if (method_exists($this, 'fetch')){
				echo $this->fetch('content'); 
			}else{
				echo $content_for_layout;
			}	
		?>
	</div>
	
<br />
<br />
<br />
<div class="navbar navbar-fixed-bottom hidden-phone" id="status">
	<div class="btn-toolbar">
		<div class="btn-group pull-right" style="margin-top: 3px;">
			<?php echo __('&copy; Seguro Social Universitario Cochabamba 2014'); ?>
		</div>

	</div>
</div>

	<?php echo $this->element('sql_dump'); ?>
	<!-- /container -->
</body>
<script>
	$(document).ready(function() {
		// remove user search cookie
		$('#mnu_admin_top').find('a').each(function() {
			$(this).click(function() {
				removeUserSearchCookie();
			});
		});
		$('#tab_user_manager').find('a').each(function() {
			$(this).click(function() {
				removeUserSearchCookie();
			});
		});

		if ($('#mnu_plugins').children('ul').find('li').length <= 1){
           $('#mnu_plugins').hide();
		}else{
           $('#mnu_plugins').show();
       	}
	});

	function removeUserSearchCookie() {
		$.cookie.raw = true;
		$.removeCookie('CakeCookie[srcPassArg]', {
			path : '/'
		});
	}
</script>
</html>
