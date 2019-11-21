"use strict";
let id = document.querySelector("#id_alumno").value;
let tabla = document.querySelector("#showActas");
fetch("api/actas/"+id)
    .then(response => response.json())
    .then(actas => {
        console.log(actas);
        actas.forEach(acta => {

            tabla.innerHTML +='<tr><td>'+acta.contenido_act+'</td><td><img src="'+acta.imagen+'"></td></tr>';
        });
    })
    .catch(error => console.log(error));

