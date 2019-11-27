<?php
/* Smarty version 3.1.33, created on 2019-11-27 16:24:34
  from 'C:\xampp\htdocs\TP-Especial-Web-2\templates\showLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dde9532e44935_85201028',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a02196364b3602d3d5d8c7843baa6783e0a5c41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-Especial-Web-2\\templates\\showLogin.tpl',
      1 => 1574868270,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dde9532e44935_85201028 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="login-wrap">
	<div class="login-html">
		<?php if (!$_smarty_tpl->tpl_vars['registro']->value) {?>
			<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['registro']->value) {?>
			<input id="tab-1" type="radio" name="tab" class="sign-in"><label for="tab-1" class="tab">Sign In</label>
			<input id="tab-2" type="radio" name="tab" class="sign-up" checked><label for="tab-2" class="tab">Sign Up</label>
		<?php }?>
		<div class="login-form">
			<form action="verify" method="POST" class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input name="username" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Contraseña</label>
					<input name="password" type="password" class="input" data-type="password">
				</div>
				<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
					<div class="alert alert-danger" role="alert">
						<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

					</div>
				<?php }?>
				<div class="group">
					<button type="submit" class="button">Ingresar</button>
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="recuperContraseña">Olvido su Contraseña?</a>
				</div>
			</form>
			<form action="createUser" method="POST" class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Nombre</label>
					<input name="username" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Contraseña</label>
					<input name="password"type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repita contraseña</label>
					<input name="passwordcheck"type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input name="email" type="text" class="input">
				</div>
				<div class="group">
					<label for="question" class="label">Primer direccion de domicilio?</label>
					<input name="question" type="text" class="input">
				</div>
				<?php if ($_smarty_tpl->tpl_vars['error']->value) {?>
					<div class="alert alert-danger" role="alert">
						<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

					</div>
				<?php }?>
				<div class="group">
					<button type="submit" class="button">Registrarse</button>
				</div>
				<div class="hr"></div>
			</form>
		</div>
	</div>
</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
