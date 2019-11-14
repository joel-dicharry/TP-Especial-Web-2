<?php
/* Smarty version 3.1.33, created on 2019-11-13 21:37:43
  from 'C:\xampp\htdocs\Web2\TP-Especial-Web-2\templates\showAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcc69977d9837_66471488',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4e3ea0fad63544e4f8e5f130e61675059a72e7f1' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TP-Especial-Web-2\\templates\\showAdmin.tpl',
      1 => 1573675621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dcc69977d9837_66471488 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<nav class="navbar navbar-light bg-light">
    <form action="home" method="get">
        <button type="submit" class="btn btn-outline-primary">Volver</button>
    </form>
    <a class="btn btn-outline-dark my-2 my-sm-0 ml-auto" href="logout">LOGOUT</a>
</nav>

<form action="cargaralumno" method="POST" enctype="multipart/form-data">
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
                <label for="imagen">Imagen</label>
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
                    <input type="file" name="input_name" id="imageToUpload">
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
<table class="table table-striped">
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
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value->especialidad;?>
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
        <table class="table table-sm">
            <thead>
                <th>Nombre</th>
                <th>id</th>
            </thead>
            <tbody>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['especialidades']->value, 'especialidad');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['especialidad']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['especialidad']->value->nombre_esp;?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['especialidad']->value->id_especialidad;?>
</td>
                    <form action="eliminarEspec/<?php echo $_smarty_tpl->tpl_vars['especialidad']->value->id_especialidad;?>
" method="post">
                        <td>
                            <button type="submit">Eliminar</button>
                        </td>
                    </form>
                    <form action="formularioModificarEsp/<?php echo $_smarty_tpl->tpl_vars['especialidad']->value->id_especialidad;?>
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
