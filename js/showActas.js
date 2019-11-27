"use strict"

let app = new Vue({
    el: "#showActasPublic",
    data: {
        title: "Actas",
        loading: false,
        actas: [] 
        
    }
})
    function allComents() {
        let  id=document.querySelector('#id_alumno').value;           
        fetch("api/actas/"+id)
        .then(response => response.json())
        .then(actas => {
                app.actas  = actas,
                app.loading = true;
        })
        .catch(error => console.log("No se Trajeron los comentarios con exito"));
    }
    allComents();