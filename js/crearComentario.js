document.querySelector("#btnenviar").addEventListener('click', crearComentario);
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
           alert('cualquier cosa')
            
          })
          .catch(function(e){
            console.log("hola?");
        })
    }  
