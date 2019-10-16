{include file="templates/header.tpl"}
    <nav class="navbar navbar-light bg-light">
        <a class="btn btn-outline-dark my-2 my-sm-0 ml-auto" href="login">Login</a>
    </nav>

    <p>
        Filtrar por categoria
    </p>
    {foreach $especialidades as $especialidad}
        <ul class="d-inline">
            <a href ="filtrar/{$especialidad->id_especialidad}">
                {$especialidad->nombre_esp}
            </a>
        </ul>
    {/foreach}
    <table class ="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
        </thead>
    <tbody>
        {foreach $students as $student} 
            <tr>
                <td><a href="alumnoview/{$student->id_alumno}">{$student->nombre}</a></td>
                <td>{$student->apellido}</td>
            </tr>
        {/foreach}
    </tbody>
</table>
{include file="templates/footer.tpl"}