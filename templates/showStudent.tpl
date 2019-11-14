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
            <td><img src="{$student->imagen}" alt ="{$student->imagen}"></td>
        </tr>
    </tbody>
</table>
<table class ="table table-striped">
    <tbody>
        {foreach $actas as $acta}
        <tr>
            <td>{$acta->contenido_act}</td>
            <td><img src="{$acta->imagen}" alt ="{$acta->imagen}"></td>
        </tr>
        {/foreach}
    </tbody>
</table>

{* <p>{$actas->id_comentario}</p>
<p>{$actas->contenido_act}</p>
<p>{$actas->id_alumno_fk}</p>
<p>{$actas->id_user_fk}</p>
<p>{$actas->imagen}</p> *}

{include file="templates/footer.tpl"}