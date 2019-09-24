<?php
/* Smarty version 3.1.33, created on 2019-09-23 20:58:40
  from 'C:\xampp\htdocs\Web2\TP-Especial-Web-2\templates\showError.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8915e07553e7_15587707',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '70a3f2dc81546634eedc9e1da64deeaa3563e6da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TP-Especial-Web-2\\templates\\showError.tpl',
      1 => 1569265116,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d8915e07553e7_15587707 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<p>
    Error, <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<p>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
