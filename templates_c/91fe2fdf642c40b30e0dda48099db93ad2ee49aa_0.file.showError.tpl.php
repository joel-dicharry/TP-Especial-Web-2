<?php
/* Smarty version 3.1.33, created on 2019-09-24 21:23:43
  from 'C:\xampp\htdocs\Web 2\TP-Especial-Web-2\templates\showError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8a6d3fcf3049_02096896',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91fe2fdf642c40b30e0dda48099db93ad2ee49aa' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\TP-Especial-Web-2\\templates\\showError.tpl',
      1 => 1569346084,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d8a6d3fcf3049_02096896 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<p>
    Error, <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<p>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
