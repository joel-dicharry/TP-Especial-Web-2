<?php
/* Smarty version 3.1.33, created on 2019-11-27 14:46:10
  from 'C:\xampp\htdocs\Web2\TP-Especial-Web-2\templates\addActas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dde7e22def1c9_04760054',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47145f8a65f0a02191a6b227f8dd3950f29e43d8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TP-Especial-Web-2\\templates\\addActas.tpl',
      1 => 1574778127,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/vue/comentarios.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dde7e22def1c9_04760054 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<table class="table table-striped">
    <tbody>
    <table class ="table table-striped">
    <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Foto Carnet</th>
    </thead>
    <tbody>
            <tr>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value->nombre;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value->apellido;?>
</td>
                <td><img src="<?php echo $_smarty_tpl->tpl_vars['student']->value->imagen;?>
"width="170"  alt="<?php echo $_smarty_tpl->tpl_vars['student']->value->apellido;?>
" srcset=""></td>
            </tr>
    </tbody>
<table class ="table table-striped">
<?php $_smarty_tpl->_subTemplateRender("file:templates/vue/comentarios.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<button id="btn-refresh">Actualizar!</button>
</table>
    <table class="table table-dark">
        <thead>
            <th>
                <label for="contenido">Contenido de acta</label>
            </th>
            <th>
                <label for="puntaje">Puntaje</label>
            </th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->id_alumno;?>
"id="id_alumno">
                    <input type="text" id="contenido" name="contenido">
                </td>
                <td>
                    <select  id="puntaje">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </td>
                <td>
                    <button type="submit" id="btnenviar">Cargar</button>
                </td>
            </tr>
        </tbody>
    </table>
<?php echo '<script'; ?>
 src="js/showstudents.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="js/crearComentario.js"><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
