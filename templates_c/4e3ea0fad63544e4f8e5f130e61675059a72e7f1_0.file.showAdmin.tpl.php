<?php
/* Smarty version 3.1.33, created on 2019-09-23 19:38:28
  from 'C:\xampp\htdocs\Web2\TP-Especial-Web-2\templates\showAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8903144caa50_53729815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e3ea0fad63544e4f8e5f130e61675059a72e7f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TP-Especial-Web-2\\templates\\showAdmin.tpl',
      1 => 1569259738,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d8903144caa50_53729815 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="cargaralumno" method="POST">
    <table>
        <thead>
            <th>
                <label for="nombre">Nombre</label>
            </th>
            <th>
                <label for="apellido">Apellido</label>
            </th>
            <th>
                <label for="dni">DNI</label>
            </th>
            <th>
                <label for="id_especialidad">Especialidad</label>
            </th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" name="nombre">
                </td>
                <td>
                    <input type="text" name="apellido">
                </td>
                <td>
                    <input type="text" name="dni">
                </td>
                <td>
                    <input type="text" name="id_especialidad">
                </td>
                <td>
                    <button type="submit">Cargar</button>
                </td>
            </tr>
        </tbody>
    </table>
</form>
<form action="agregarespecialidad" method="POST">
    <table>
        <thead>
            <th>
                <label for="especialidad">Especialidad</label>
            </th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" name="especialidad">
                </td>
                <td>
                    <button type="submit">Agregar</button>
                </td>
            </tr>
        </tbody>
    </table>
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
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value->apellido;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value->dni;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value->id_especialidad;?>
</td>
                <form action="eliminarAlumno/<?php echo $_smarty_tpl->tpl_vars['student']->value->id_alumno;?>
" method="post">
                    <td>
                        <button type="submit">Eliminar</button>
                    </td>
                </form>
                <form action="formularioModificar/<?php echo $_smarty_tpl->tpl_vars['student']->value->id_alumno;?>
" method="post">
                    <td>
                        <button type="submit">Modificar</button>
                    </td>
                </form>
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
