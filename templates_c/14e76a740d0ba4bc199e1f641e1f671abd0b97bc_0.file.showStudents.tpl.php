<?php
/* Smarty version 3.1.33, created on 2019-12-02 02:36:48
  from 'C:\xampp\htdocs\Web2\TP-Especial-Web-2\templates\showStudents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de46ab0246321_61164240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '14e76a740d0ba4bc199e1f641e1f671abd0b97bc' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TP-Especial-Web-2\\templates\\showStudents.tpl',
      1 => 1575250605,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5de46ab0246321_61164240 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <nav class="navbar navbar-light bg-light">
    <?php if ($_smarty_tpl->tpl_vars['session']->value) {?>
        <span class="username"><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
 </span>
        <?php if ($_smarty_tpl->tpl_vars['user']->value->admin == 1) {?>
            <a href="administrador"><button>admin</button></a>
        <?php }?>
        <a href="logout">  <button>Cerrar sesión</button></a>
        <?php } else { ?>
            <a href="login"> <button>Log In/Sing Up</button> </a>
    <?php }?>
    </nav>
       
    <div class="dropdown show">   
        Filtrar por especialidad        
        <a class="btn btn-secondary dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Especialidad</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="filtrar/">Ver Todos</a>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['especialidades']->value, 'especialidad');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['especialidad']->value) {
?>
                <a class="dropdown-item" href="filtrar/<?php echo $_smarty_tpl->tpl_vars['especialidad']->value->id_especialidad;?>
"><?php echo $_smarty_tpl->tpl_vars['especialidad']->value->nombre_esp;?>
</a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
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
                <td><a href="actasAlumno/<?php echo $_smarty_tpl->tpl_vars['student']->value->id_alumno;?>
"><?php echo $_smarty_tpl->tpl_vars['student']->value->nombre;?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['student']->value->apellido;?>
</td>
                <td><img src="<?php echo $_smarty_tpl->tpl_vars['student']->value->imagen;?>
"width="170"></td>
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
