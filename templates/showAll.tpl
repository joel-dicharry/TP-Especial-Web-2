{include file="templates/header.tpl"}
    <div class="navbar-nav">
        <a class="nav-item nav-link" href="loginAdmin">Administrar</a>
    </div>
        <table class="table table-dark">
            <thead>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>DNI</th>
                <th>Especialidad</th>
            </thead>
            <tbody>
                {foreach $students as $student} 
                    {* {$student->id_alumno}; *}
                    <form action="eliminarAlumno" method="post">
                    <tr class="tdlista">
                        <td class="td-lista">{$student->nombre}</td>
                        <td class="td-lista">{$student->apellido}</td>
                        <td class="td-lista">{$student->dni}</td>
                        <td class="td-lista">{$student->id_especialidad}</td>
                    </tr>
                {/foreach}
            </tbody>
        </table>
        {* <select name="filtrar" id="">
                {foreach $especialidades as $especialidad} 
                <option value="{$especialidad->id_especialidad}"></option>
        </select>         *}
{include file="templates/footer.tpl"}