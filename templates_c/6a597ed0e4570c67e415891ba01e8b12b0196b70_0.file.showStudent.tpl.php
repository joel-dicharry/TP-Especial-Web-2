<?php
/* Smarty version 3.1.33, created on 2019-10-09 16:49:01
  from 'C:\xampp\htdocs\Web 2\TP-Especial-Web-2\templates\showStudent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d9df35dc84232_85690427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a597ed0e4570c67e415891ba01e8b12b0196b70' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\TP-Especial-Web-2\\templates\\showStudent.tpl',
      1 => 1570632540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d9df35dc84232_85690427 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <nav class="navbar navbar-light bg-light">
        <a class="btn btn-outline-dark my-2 my-sm-0 ml-auto" href="login">Login</a>
    </nav>

    <table class ="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
        </thead>
    <tbody> 
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value->nombre;?>
</a></td>
            </tr>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value->apellido;?>
</a></td>
            </tr>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value->dni;?>
</a></td>
            </tr>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value->id_especialidad;?>
</a></td>
            </tr>
            
    </tbody>
</table>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
