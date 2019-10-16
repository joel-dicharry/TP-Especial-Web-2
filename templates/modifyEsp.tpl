{include "templates/header.tpl"}
<form action="modificarEsp/{$especialidad->id_especialidad}" method="POST">
    <table class="table table-dark">
        <thead>
            <th>
                <label for="nombre">Nombre</label>
            </th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="text" name="nombre-esp" value="{$especialidad->nombre_esp}">
                </td>
                <td>
                    <button type="submit">Cargar</button>
                </td>
            </tr>
        </tbody>
    </table>
</form>
{include "templates/footer.tpl"}