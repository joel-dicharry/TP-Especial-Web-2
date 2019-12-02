<?php
/* Smarty version 3.1.33, created on 2019-12-02 01:46:50
  from 'C:\xampp\htdocs\Web2\TP-Especial-Web-2\templates\vue\publicComment.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de45efa067468_03193958',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bc59858507eac5c11341106ccdb227a9ae08614' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TP-Especial-Web-2\\templates\\vue\\publicComment.tpl',
      1 => 1575058674,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de45efa067468_03193958 (Smarty_Internal_Template $_smarty_tpl) {
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
