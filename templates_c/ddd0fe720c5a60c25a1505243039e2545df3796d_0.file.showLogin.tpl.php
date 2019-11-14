<?php
/* Smarty version 3.1.33, created on 2019-10-01 22:49:59
  from 'C:\xampp\htdocs\Web 2\TP-Especial-Web-2\templates\showLogin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d93bbf79a0e60_38991946',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ddd0fe720c5a60c25a1505243039e2545df3796d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\TP-Especial-Web-2\\templates\\showLogin.tpl',
      1 => 1569951698,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d93bbf79a0e60_38991946 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<div class="container">
    <form action="verify" method="POST" class="col-md-4 offset-md-4 mt-4">
        <div class="form-group">
            <label>Usuario (email)</label>
            <input type="email" name="username" class="form-control" placeholder="Ingrese email">
        </div>

        <div class="form-group">
            <label>Password</label>
            <input type="password" name="password" class="form-control" placeholder="Password">
        </div>

                <button type="submit" class="btn btn-primary">Ingresar</button>
    </form>

</div>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
