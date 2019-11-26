"use strict"

let app = new Vue({
    el: "#showActas",
    data: {
        title: "Actas",
        loading: false,
        actas: [] 
        
    }
});


document.querySelector("#btn-refresh").addEventListener('click', allComents);

function allComents() {
    // inicia la carga
   
   
   let  id=document.querySelector('#id_alumno').value;

    console.log(id);
    
    fetch("api/actas/"+id)
    .then(response => response.json())
    .then(actas => {
        app.actas  = actas,
        app.loading = true;

    })
    .catch(error => console.log(error));
}
    

    allComents();
