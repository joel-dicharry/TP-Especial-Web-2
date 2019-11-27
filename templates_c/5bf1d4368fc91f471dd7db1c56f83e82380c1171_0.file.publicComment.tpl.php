<?php
/* Smarty version 3.1.33, created on 2019-11-27 16:59:57
  from 'C:\xampp\htdocs\TP-Especial-Web-2\templates\vue\publicComment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5dde9d7ddd2b86_14183438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bf1d4368fc91f471dd7db1c56f83e82380c1171' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TP-Especial-Web-2\\templates\\vue\\publicComment.tpl',
      1 => 1574870390,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5dde9d7ddd2b86_14183438 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <section id="showActasPublic">
            <div  class="overflow-auto">
                <div v-if="!loading" class="card-body">
                    Cargando...
                </div>
                <div v-if="loading" >
                    <ul  v-for="acta in actas" >
                        <li>
                            <div>
                                <a>{{acta.contenido_act}}</a>
                                <a>{{acta.puntaje}}</a>
                            </div>
                        </li>
                    </ul>
                </div>
        </div>
    </section>

<?php }
}
