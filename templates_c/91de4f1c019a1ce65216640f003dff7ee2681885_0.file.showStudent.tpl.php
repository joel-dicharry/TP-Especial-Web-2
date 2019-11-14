<?php
/* Smarty version 3.1.33, created on 2019-11-14 16:08:50
  from 'C:\xampp\htdocs\Web2\TP-Especial-Web-2\templates\showStudent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dcd6e025f21b8_63953246',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '91de4f1c019a1ce65216640f003dff7ee2681885' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TP-Especial-Web-2\\templates\\showStudent.tpl',
      1 => 1573744129,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5dcd6e025f21b8_63953246 (Smarty_Internal_Template $_smarty_tpl) {
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
" alt ="<?php echo $_smarty_tpl->tpl_vars['student']->value->imagen;?>
"></td>
        </tr>
    </tbody>
</table>
<table class ="table table-striped">
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['actas']->value, 'acta');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['acta']->value) {
?>
        <tr>
            <td><?php echo $_smarty_tpl->tpl_vars['acta']->value->contenido_act;?>
</td>
            <td><img src="<?php echo $_smarty_tpl->tpl_vars['acta']->value->imagen;?>
" alt ="<?php echo $_smarty_tpl->tpl_vars['acta']->value->imagen;?>
"></td>
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
