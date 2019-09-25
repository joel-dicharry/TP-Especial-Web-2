{include file="templates/header.tpl"}
   <table class ="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
        </thead>
    <tbody>
        {foreach $students as $student} 
            <tr>
                <td>{$student->nombre}</td>
                <td>{$student->apellido}</td>
            </tr>
        {/foreach}
    </tbody>
</table>
{include file="templates/footer.tpl"}