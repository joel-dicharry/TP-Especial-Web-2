<?php
/* Smarty version 3.1.33, created on 2019-12-02 02:31:46
  from 'C:\xampp\htdocs\Web2\TP-Especial-Web-2\templates\vue\comentarios.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5de4698205a666_44538305',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6892117232dd96b5abc714ed7a7f441e049d6067' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Web2\\TP-Especial-Web-2\\templates\\vue\\comentarios.tpl',
      1 => 1575250269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5de4698205a666_44538305 (Smarty_Internal_Template $_smarty_tpl) {
?>
    <section id="showActas">
    <p>Este alumno tiene un promedio de puntaje de {{promedio}}</p>
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
                                <a v-if="admin">
                                <button id="boton_borrar" class="btn btn-primary" @click="(event)=>{borrar(acta.id_comentario,event)} ">borrar</button>  
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
        </div>
    </section>

<?php }
}
