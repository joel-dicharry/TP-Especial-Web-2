<?php
/* Smarty version 3.1.33, created on 2019-09-24 20:45:14
  from 'C:\xampp\htdocs\Web 2\TP-Especial-Web-2\templates\modifyStudent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d8a643a0e7ec6_62836483',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0daa4c111f2cc4547308ba137df360037239447f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\TP-Especial-Web-2\\templates\\modifyStudent.tpl',
      1 => 1569350219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d8a643a0e7ec6_62836483 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="../modificarAlumno/<?php echo $_smarty_tpl->tpl_vars['student']->value->id_alumno;?>
" method="POST">
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
                                <input type="text" name="nombre" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->nombre;?>
">
                            </td>
                            <td>
                                <input type="text" name="apellido" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->apellido;?>
">
                            </td>
                            <td>
                                <input type="text" name="dni" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->dni;?>
">
                            </td>
                            <td>
                                <input type="text" name="id_especialidad" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->id_especialidad;?>
">
                            </td>
                            <td>
                            <button type="submit">Cargar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}