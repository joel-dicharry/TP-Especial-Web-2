{include "templates/header.tpl"}
<form action="./modificarAlumno/{$student->id_alumno}" method="POST" enctype="multipart/form-data">
     <table class="table table-dark">
        <thead>
            <th>
                <label for="nombre">Nombre</label>
            </th>
            <th>
                <label for="apellido">Apellido</label>
            </th>
            <th>
                <label for="dni">DNI</label>
            </th>
            <th>
                <label for="id_especialidad">Especialidad</label>
            </th>
        </thead> 
        <tbody>
            <tr>
                <td>
                    <input type="text" name="nombre" value="{$student->nombre}">
                </td>
                <td>
                    <input type="text" name="apellido" value="{$student->apellido}">
                </td>
                <td>
                    <input type="number" name="dni" value="{$student->dni}">
                </td>
                <td>
                    <select name="id_especialidad">
                        <option value="{$student->id_especialidad}" selected> {$student->especialidad} </option>
                        {foreach $especialidades as $especialidad}
                            {if $especialidad->nombre_esp != $student->especialidad}
                                <option value="{$especialidad->id_especialidad}">{$especialidad->nombre_esp}</option>
                            {/if}
                        {/foreach}
                    </select>
                </td>
            </tr>
        </tbody> 
    </table>
    {if {$student->imagen}}
        <img src="{$student->imagen}"width="170"> 
    <tr>
        <a>Reemplazar imagen de alumno</a>
        <input type="file" name="input_img" id="imageToUpload">
    </tr>
    
    {else}
        <tr>
        <a>Agregar una imagen a este Alumno</a>
        <input type="file" name="input_img" id="imageToUpload">
    </tr>
    {/if}
        <td>
            <button type="submit">Cargar</button>
        </td>
</form>
    {if {$student->imagen}}
    <a href="deleteImagen/{$student->id_alumno}"><button>Borrar Imagen</button></a>
    {/if}

{include "templates/footer.tpl"}