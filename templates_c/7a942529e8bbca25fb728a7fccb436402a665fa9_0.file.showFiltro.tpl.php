<?php
/* Smarty version 3.1.33, created on 2019-10-16 13:05:55
  from 'C:\xampp\htdocs\Web 2\TP-Especial-Web-2\templates\showFiltro.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da6f9934104b9_56439421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a942529e8bbca25fb728a7fccb436402a665fa9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web 2\\TP-Especial-Web-2\\templates\\showFiltro.tpl',
      1 => 1571223832,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5da6f9934104b9_56439421 (Smarty_Internal_Template $_smarty_tpl) {
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
        </thead>
    <tbody>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['students']->value, 'student');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['student']->value) {
?> 
            <tr>
                <td><a href="alumnoview/<?php echo $_smarty_tpl->tpl_vars['student']->value->id_alumno;?>
"><?php echo $_smarty_tpl->tpl_vars['student']->value->nombre;?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value->apellido;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value->dni;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value->especialidad;?>
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