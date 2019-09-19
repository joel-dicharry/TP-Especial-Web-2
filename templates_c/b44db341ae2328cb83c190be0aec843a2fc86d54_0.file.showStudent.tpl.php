<?php
/* Smarty version 3.1.33, created on 2019-09-18 21:57:45
  from 'C:\xampp\htdocs\web\TP-Especial-Web-2\templates\showStudent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d828c39270789_59112787',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b44db341ae2328cb83c190be0aec843a2fc86d54' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web\\TP-Especial-Web-2\\templates\\showStudent.tpl',
      1 => 1568833629,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5d828c39270789_59112787 (Smarty_Internal_Template $_smarty_tpl) {
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
                            <button type="submit">Modificar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
