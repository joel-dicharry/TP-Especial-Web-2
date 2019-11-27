{literal}
    
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
                                <button id="boton_borrar" class="btn btn-primary" @click="(event)=>{borrar(acta.id_comentario,event)} ">borrar</button>                            </div>
                        </li>
                    </ul>
                    
                 
                </div>
        </div>
            
    </section>

{/literal}
