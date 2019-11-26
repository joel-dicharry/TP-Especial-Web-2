<?php
/* Smarty version 3.1.33, created on 2019-11-26 18:28:37
  from 'C:\xampp\htdocs\TP-Especial-Web-2\templates\showStudent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5ddd60c5dfe1f1_93519501',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bac354fbbafcf686d764c7c195011f3445b19460' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-Especial-Web-2\\templates\\showStudent.tpl',
      1 => 1574788008,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5ddd60c5dfe1f1_93519501 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <nav class="navbar navbar-light bg-light">
        <form action="home" method="get">    
            <button type="submit" class="btn btn-outline-primary">Volver</button>
        </form>
        <a class="btn btn-outline-dark my-2 my-sm-0 ml-auto" href="login">Login</a>
    </nav>

    <table class ="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Documento</th>
            <th>Especialidad</th>
            <th>Imagen</th>
        </thead>
    <tbody> 
        <tr>
            <th><?php echo $_smarty_tpl->tpl_vars['student']->value->nombre;?>
</a></th>
            <th><?php echo $_smarty_tpl->tpl_vars['student']->value->apellido;?>
</a></th>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value->dni;?>
</a></td>
            <td><?php echo $_smarty_tpl->tpl_vars['student']->value->especialidad;?>
</a></td>
            <td><img src="<?php echo $_smarty_tpl->tpl_vars['student']->value->imagen;?>
"width="170 alt ="<?php echo $_smarty_tpl->tpl_vars['student']->value->imagen;?>
"></td>
        </tr>
    </tbody>
</table>
<table class ="table table-striped">
    <tbody id="showActas"> 
    </tbody>
</table>
<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->id_alumno;?>
"id="id_alumno">

<?php echo '<script'; ?>
 src="js/showstudents.js"><?php echo '</script'; ?>
>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
