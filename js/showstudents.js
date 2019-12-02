"use strict"

let app = new Vue({
    el: "#showActas",
    data: {
        title: "Actas",
        loading: false,
        admin: false,
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
let admin = document.querySelector("#admin").value;
if(admin=="1"||admin=="0"){
    console.log(admin);
    
document.querySelector("#btnenviar").addEventListener('click', crearComentario);
}
function allComents() {
    let  id=document.querySelector('#id_alumno').value;    
    console.log(id);
    
    fetch("api/student/"+id+"/actas")
    .then(response => response.json())
    .then(actas => {
        if(admin){
            if (admin=="1") {
                app.admin= true;
            }
        }
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
function crearComentario(){
        let contenido=document.querySelector('#contenido').value;
        let id=document.querySelector('#id_alumno').value;
        let puntaje=document.querySelector('#puntaje').value;
        let acta={
            "contenido_act":contenido,
            "puntaje":puntaje,
             "id_alumno_fk":id
        };
        ////////////////////////////////////
        fetch('api/actas', {
            "method": "POST",
            "headers": { "Content-Type": "application/json" },
            "body": JSON.stringify(acta)
          }).then(function(r){
            return r.json()
          })
          .then(function(json) {
            allComents();
        })
        .catch(function(e){            
            allComents();
        })
    }  
allComents();

