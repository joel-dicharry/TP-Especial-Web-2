<?php
/* Smarty version 3.1.33, created on 2019-10-16 05:10:09
  from 'C:\xampp\htdocs\Web2\TP-Especial-Web-2\templates\modifyEsp.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5da68a1179b418_24514185',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f008556079870847af35d7bf7ef9a932baeef4b4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TP-Especial-Web-2\\templates\\modifyEsp.tpl',
      1 => 1571195401,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/header.tpl' => 1,
    'file:templates/footer.tpl' => 1,
  ),
),false)) {
function content_5da68a1179b418_24514185 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:templates/header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<form action="modificarEsp/<?php echo $_smarty_tpl->tpl_vars['especialidad']->value->id_especialidad;?>
" method="POST">
                <table class="table table-dark">
                    <thead>
                        <th>
                            <label for="nombre">Nombre</label>
                        </th>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <input type="text" name="nombre-esp" value="<?php echo $_smarty_tpl->tpl_vars['especialidad']->value->nombre_esp;?>
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
