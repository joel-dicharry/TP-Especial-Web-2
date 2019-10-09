{include file="templates/header.tpl"}
    <nav class="navbar navbar-light bg-light">
        <a class="btn btn-outline-dark my-2 my-sm-0 ml-auto" href="login">Login</a>
    </nav>

    <table class ="table table-striped">
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
        </thead>
    <tbody> 
            <tr>
                <td>{$student->nombre}</a></td>
            </tr>
            <tr>
                <td>{$student->apellido}</a></td>
            </tr>
            <tr>
                <td>{$student->dni}</a></td>
            </tr>
            <tr>
                <td>{$student->id_especialidad}</a></td>
            </tr>
            
    </tbody>
</table>
{include file="templates/footer.tpl"}