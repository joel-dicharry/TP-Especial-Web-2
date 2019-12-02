{include file="templates/header.tpl"}
    
    <nav class="navbar navbar-light bg-light">
    {if $session }
        <span class="username">{$user->username} </span>
        {if $user->admin==1}
            <a href="administrador"><button>admin</button></a>
        {/if}
        <a href="logout">  <button>Cerrar sesión</button></a>
        {else}
            <a href="login"> <button>Log In/Sing Up</button> </a>
    {/if}
    </nav>
       
    <div class="dropdown show">   
        Filtrar por especialidad        
        <a class="btn btn-secondary dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Especialidad</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            <a class="dropdown-item" href="filtrar/">Ver Todos</a>
            {foreach $especialidades as $especialidad}
                <a class="dropdown-item" href="filtrar/{$especialidad->id_especialidad}">{$especialidad->nombre_esp}</a>
            {/foreach}
        </div>
    </div>
    <table class ="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Foto Carnet</th>
        </thead>
    <tbody>
        {foreach $students as $student} 
            <tr>
                <td><a href="actasAlumno/{$student->id_alumno}">{$student->nombre}</a></td>
                <td>{$student->apellido}</td>
                <td><img src="{$student->imagen}"width="170"></td>
            </tr>
        {/foreach}
    </tbody>
</table>
{include file="templates/footer.tpl"}
