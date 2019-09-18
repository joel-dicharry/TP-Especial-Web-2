{include file="templates/header.tpl"}
    <form action="administrador" method="post">
        <label for="user">User</label>
            <input type="text" name="user">
        <label for="password">Password</label>
            <input type="password" name="password">
        <button type="submit">Login</button>
    </form>
        <table>
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
                    <tr>
                        <td>{$student->nombre}</td>
                        <td>{$student->apellido}</td>
                        <td>{$student->dni}</td>
                        <td>{$student->id_especialidad}</td>
                    </tr>
                {/foreach}
            </tbody>
        </table>        
{include file="templates/footer.tpl"}