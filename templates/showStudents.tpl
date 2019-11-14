{include file="templates/header.tpl"}
    <nav class="navbar navbar-light bg-light">
        <a class="btn btn-outline-dark my-2 my-sm-0 ml-auto" href="login">Login</a>
    </nav>
    

<<<<<<< HEAD
       
    <div class="dropdown show">   
        Filtrar por especialidad        
        <a class="btn btn-secondary dropdown-toggle" href="" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Especialidad</a>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
            {foreach $especialidades as $especialidad}
                <a class="dropdown-item" href="filtrar/{$especialidad->id_especialidad}">{$especialidad->nombre_esp}</a>
            {/foreach}
        </div>
    </div>
=======
    <p>
        Filtrar por categoria
    </p>
    <!-- <form action="cargaralumno" method="POST">
    <select name="" id="">
    <option value="filtrar/{$especialidad->id_especialidad}">{$especialidad->nombre_esp}</option> -->
    {foreach $especialidades as $especialidad}
            <ul class="d-inline">
                <a href ="filtrar/{$especialidad->id_especialidad}">
                    {$especialidad->nombre_esp}
                </a>
            </ul>
            {/foreach}
    </select>
>>>>>>> 829360ccecf107f238921012a314189caa66b3c9
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
                <td><img src="{$student->imagen}"width="170"  alt="{$student->apellido}" srcset=""></td>

            </tr>
        {/foreach}
    </tbody>
</table>
{include file="templates/footer.tpl"}
