<?php
/* Smarty version 3.1.33, created on 2019-10-16 03:59:04
  from 'C:\xampp\htdocs\Web 2\TP-Especial-Web-2\templates\showAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da679683de394_23215290',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd6b63dfd1676f490e070c6ac066c02d22408459' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\TP-Especial-Web-2\\templates\\showAdmin.tpl',
      1 => 1571187726,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5da679683de394_23215290 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<nav class="navbar navbar-light bg-light">
    <a class="btn btn-outline-dark my-2 my-sm-0 ml-auto" href="logout">LOGOUT</a>
</nav>
<form action="cargaralumno" method="POST">
    <table class="table table-dark">
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
                    <select name="id_especialidad" id="id_especialidad">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['especialidades']->value, 'especialidad');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['especialidad']->value) {
?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['especialidad']->value->id_especialidad;?>
"><?php echo $_smarty_tpl->tpl_vars['especialidad']->value->nombre_esp;?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </td>
                <td>
                    <button type="submit">Cargar</button>
                </td>
            </tr>
        </tbody>
    </table>
</form>
<form action="agregarespecialidad" method="POST">
    <table class="table table-dark">
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
    <table class ="table table-striped">
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
