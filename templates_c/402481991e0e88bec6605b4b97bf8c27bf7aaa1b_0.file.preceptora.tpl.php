<?php
/* Smarty version 3.1.33, created on 2019-12-02 02:09:30
  from 'C:\xampp\htdocs\Web2\TP-Especial-Web-2\templates\preceptora.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de4644a822ae7_23586523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '402481991e0e88bec6605b4b97bf8c27bf7aaa1b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TP-Especial-Web-2\\templates\\preceptora.tpl',
      1 => 1575248925,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5de4644a822ae7_23586523 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
if ($_smarty_tpl->tpl_vars['session']->value) {?>
        <span class="username"><?php echo $_smarty_tpl->tpl_vars['session']->value->username;?>
 </span>
        <?php if ($_smarty_tpl->tpl_vars['session']->value->admin == 1) {?>
            <a href="administrador"><button>Administrador</button></a>
        <?php }?>
        <a href="logout"><button>Cerrar sesión</button></a>
<?php }?>
<table class="table table-striped">
    <tbody>
        <table class ="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Foto Carnet</th>
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
                <td><img src="<?php echo $_smarty_tpl->tpl_vars['student']->value->imagen;?>
"width="170" srcset=""></td>
                <td><a href="actasAlumno/<?php echo $_smarty_tpl->tpl_vars['student']->value->id_alumno;?>
">Ver Actas</a></td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </tbody>
<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
