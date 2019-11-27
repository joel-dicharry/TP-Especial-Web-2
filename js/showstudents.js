"use strict"

let app = new Vue({
    el: "#showActas",
    data: {
        title: "Actas",
        loading: false,
        promedio : 0,
        actas: [] 
        
    },
    methods:{
            borrar:function(id){
                fetch('api/actas/'+id, {
                    "method": "DELETE",
                    "headers": { "Content-Type": "application/json" },
                  }).then(response => response.json())
                  .then(response => allComents())
                  
        }
    }
});
document.querySelector("#btn-refresh").addEventListener('click', allComents);

function allComents() {
    let  id=document.querySelector('#id_alumno').value;    
    fetch("api/actas/"+id)
    .then(response => response.json())
    .then(actas => {
            app.actas  = actas,
            app.promedio = promedioContador(actas),
            app.loading = true;
    })
    .catch(error => console.log("No se Trajeron los comentarios con exito"));
}
function promedioContador(actas){
    let contador=0;
    let total=0;
    for (let acta of actas) {
        contador++;
        total+= parseInt(acta.puntaje);
    }
    total = total/contador;
    return total;
    
}

allComents();

