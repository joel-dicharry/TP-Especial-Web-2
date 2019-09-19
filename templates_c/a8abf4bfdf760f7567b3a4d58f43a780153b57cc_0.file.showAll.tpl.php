<?php
/* Smarty version 3.1.33, created on 2019-09-18 21:56:41
  from 'C:\xampp\htdocs\web\TP-Especial-Web-2\templates\showAll.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d828bf93cceb5_09385516',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8abf4bfdf760f7567b3a4d58f43a780153b57cc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\TP-Especial-Web-2\\templates\\showAll.tpl',
      1 => 1568833622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d828bf93cceb5_09385516 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <form action="administrador" method="post">
        <label for="user">User</label>
            <input type="text" name="user">
        <label for="password">Password</label>
            <input type="password" name="password">
        <button type="submit">Login</button>
    </form>
        <table>
            <thead>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Especialidad</th>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['students']->value, 'student');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['student']->value) {
?> 
                                        <form action="eliminarAlumno" method="post">
                    <tr>
                        <td><?php echo $_smarty_tpl->tpl_vars['student']->value->nombre;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['student']->value->apellido;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['student']->value->dni;?>
</td>
                        <td><?php echo $_smarty_tpl->tpl_vars['student']->value->id_especialidad;?>
</td>
                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>        
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
