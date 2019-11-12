<?php
/* Smarty version 3.1.33, created on 2019-11-12 18:50:59
  from 'C:\xampp\htdocs\TP-Especial-Web-2\templates\registrarse.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcaf103717b45_23357362',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d09a27c0a07aa73a626b93c926b893bcd73d81f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-Especial-Web-2\\templates\\registrarse.tpl',
      1 => 1573580591,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dcaf103717b45_23357362 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form class="form-signin col-md-4 offset-md-4 mt-4">
  <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Formulario de registro</h1>
  <label for="inputEmail" class="sr-only">Correo</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email">
  <label for="inputPassword" class="sr-only">Usuario</label>
  <input type="text" id="inputUser" class="form-control" placeholder="Usuario">
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña">
  
  <button class="btn btn-lg btn-primary btn-block" type="submit">Registro</button>
</form>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
