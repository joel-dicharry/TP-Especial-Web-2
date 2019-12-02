{include "templates/header.tpl"}
{if $session }
        <span class="username">{$session->username} </span>
        {if $session->admin==1}
            <a href="administrador"><button>Administrador</button></a>
        {/if}
        <a href="logout"><button>Cerrar sesión</button></a>
{/if}
<table class="table table-striped">
    <tbody>
        <table class ="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Foto Carnet</th>
        </thead>
    <tbody>
        {foreach $students as $student} 
            <tr>
                <td>{$student->nombre}</td>
                <td>{$student->apellido}</td>
                <td><img src="{$student->imagen}"width="170" srcset=""></td>
                <td><a href="actasAlumno/{$student->id_alumno}">Ver Actas</a></td>
            </tr>
        {/foreach}
    </tbody>
{include "templates/footer.tpl"}