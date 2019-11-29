<?php
/* Smarty version 3.1.33, created on 2019-11-27 18:58:56
  from 'C:\xampp\htdocs\TP-Especial-Web-2\templates\forgout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddeb960c00f57_81103453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd9649bede2c0554055c8a8dca4848b5037d1ce96' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-Especial-Web-2\\templates\\forgout.tpl',
      1 => 1574865234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ddeb960c00f57_81103453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<div class="login-wrap">

            <form action="verifyAnswer" method="POST" class="sign-up-htm">
                <div class="group">
                    <label for="pass" class="label">Email Address</label>
                    <input name="email" type="text" class="input">
                </div>
                <div class="group">
                    <label for="question" class="label">Primer direccion de domicilio?</label>
                    <input name="question" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Nueva Contraseña</label>
                    <input name="password"type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <label for="pass" class="label">Repita nueva contraseña</label>
                    <input name="passwordcheck"type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <button type="submit" class="button">Cambiar Contraseña</button>
                </div>
                <div class="hr"></div>
            </form>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
