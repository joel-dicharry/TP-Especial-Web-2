<?php
/* Smarty version 3.1.33, created on 2019-10-15 23:09:42
  from 'C:\xampp\htdocs\TP-Especial-Web-2\templates\showStudent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da63596292d87_20476593',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bac354fbbafcf686d764c7c195011f3445b19460' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-Especial-Web-2\\templates\\showStudent.tpl',
      1 => 1571173780,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5da63596292d87_20476593 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <nav class="navbar navbar-light bg-light">
        <a class="btn btn-outline-dark my-2 my-sm-0 ml-auto" href="login">Login</a>
    </nav>

    <table class ="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Documento</th>
            <th>Especialidad</th>
        </thead>
    <tbody> 
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['student']->value->nombre;?>
</a></th>
            <th><?php echo $_smarty_tpl->tpl_vars['student']->value->apellido;?>
</a></th>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value->dni;?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value->id_especialidad;?>
</a></td>
        </tr>
    </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
