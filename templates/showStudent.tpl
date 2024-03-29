{include file="templates/header.tpl"}
    <nav class="navbar navbar-light bg-light">
        <form action="home" method="get">    
            <button type="submit" class="btn btn-outline-primary">Volver</button>
        </form>
        <a class="btn btn-outline-dark my-2 my-sm-0 ml-auto" href="login">Login</a>
    </nav>

    <table class ="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Documento</th>
            <th>Especialidad</th>
            <th>Imagen</th>
        </thead>
    <tbody> 
        <tr>
            <th>{$student->nombre}</a></th>
            <th>{$student->apellido}</a></th>
            <td>{$student->dni}</a></td>
            <td>{$student->especialidad}</a></td>
            <td><img src="{$student->imagen}"width="170"></td>
        </tr>
    </tbody>
</table>
<table class ="table table-striped">
    <tbody> 
        {include "templates/vue/publicComment.tpl"}
    </tbody>
</table>
<input type="hidden" value="{$student->id_alumno}"id="id_alumno">

<script src="js/showactas.js"></script>

{include file="templates/footer.tpl"}