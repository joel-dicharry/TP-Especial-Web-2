{literal}
               
    <section id="showActas">
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
                                <button type="submit"id="btn_eliminar">Eliminar Acta</button>
                            </div>
                        </li>
                    </ul>
                    
                 
                </div>
        </div>
            
    </section>


{/literal}