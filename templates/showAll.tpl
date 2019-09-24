{include file="templates/header.tpl"}
    <form action="administrador" method="post">
        <label for="user">User</label>
            <input type="text" name="user">
        <label for="password">Password</label>
            <input type="password" name="password">
        <button type="submit">Login</button>
    </form>
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