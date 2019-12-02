<?php
/* Smarty version 3.1.33, created on 2019-12-02 14:49:39
  from 'C:\xampp\htdocs\Web2\TP-Especial-Web-2\templates\modifyStudent.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de51673713070_78615329',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb2118f6192e5268ef095045d1ceec089590055a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TP-Especial-Web-2\\templates\\modifyStudent.tpl',
      1 => 1575294574,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5de51673713070_78615329 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="./modificarAlumno/<?php echo $_smarty_tpl->tpl_vars['student']->value->id_alumno;?>
" method="POST" enctype="multipart/form-data">
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
                    <input type="number" name="dni" value="<?php echo $_smarty_tpl->tpl_vars['student']->value->dni;?>
">
                </td>
                <td>
                    <select name="id_especialidad">
                        <option value="<?php echo $_smarty_tpl->tpl_vars['student']->value->id_especialidad;?>
" selected> <?php echo $_smarty_tpl->tpl_vars['student']->value->especialidad;?>
 </option>
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['especialidades']->value, 'especialidad');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['especialidad']->value) {
?>
                            <?php if ($_smarty_tpl->tpl_vars['especialidad']->value->nombre_esp != $_smarty_tpl->tpl_vars['student']->value->especialidad) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['especialidad']->value->id_especialidad;?>
"><?php echo $_smarty_tpl->tpl_vars['especialidad']->value->nombre_esp;?>
</option>
                            <?php }?>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </td>
            </tr>
        </tbody> 
    </table>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['student']->value->imagen;
$_prefixVariable1 = ob_get_clean();
if ($_prefixVariable1) {?>
        <img src="<?php echo $_smarty_tpl->tpl_vars['student']->value->imagen;?>
"width="170"> 
    <tr>
        <a>Reemplazar imagen de alumno</a>
        <input type="file" name="input_img" id="imageToUpload">
    </tr>
    
    <?php } else { ?>
        <tr>
        <a>Agregar una imagen a este Alumno</a>
        <input type="file" name="input_img" id="imageToUpload">
    </tr>
    <?php }?>
        <td>
            <button type="submit">Cargar</button>
        </td>
</form>
    <?php ob_start();
echo $_smarty_tpl->tpl_vars['student']->value->imagen;
$_prefixVariable2 = ob_get_clean();
if ($_prefixVariable2) {?>
    <a href="deleteImagen/<?php echo $_smarty_tpl->tpl_vars['student']->value->id_alumno;?>
"><button>Borrar Imagen</button></a>
    <?php }?>

<?php $_smarty_tpl->_subTemplateRender("file:templates/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
