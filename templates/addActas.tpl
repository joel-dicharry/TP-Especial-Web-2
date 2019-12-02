{include "templates/header.tpl"}
<table class="table table-striped">
    <tbody>
    <table class ="table table-striped">
    <thead>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Foto Carnet</th>
    </thead>
    <tbody>
            <tr>
                <td>{$student->nombre}</td>
                <td>{$student->apellido}</td>
                <td><img src="{$student->imagen}"width="170" srcset=""></td>
            </tr>
    </tbody>
<table class ="table table-striped">
{if $session =="3"}
<button type="submit" class="botonoculto" id="btnenviar">Cargar</button>
<input type="hidden" value="{$student->id_alumno}"id="id_alumno">
<input type="hidden" value="0"id="admin">
{elseif $session->admin=="1"}
<input type="hidden" value="1"id="admin">
<table class="table table-dark">
        <thead>
            <th>
                <label for="contenido">Contenido de acta</label>
            </th>
            <th>
                <label for="puntaje">Puntaje</label>
            </th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="hidden" value="{$student->id_alumno}"id="id_alumno">
                    <input type="text" id="contenido" name="contenido">
                </td>
                <td>
                    <select  id="puntaje">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </td>
                <td>
                    <button type="submit" id="btnenviar">Cargar</button>
                </td>
            </tr>
        </tbody>
    </table>
{elseif $session->admin=="0"}
    <input type="hidden" value="0"id="admin">
    <table class="table table-dark">
        <thead>
            <th>
                <label for="contenido">Contenido de acta</label>
            </th>
            <th>
                <label for="puntaje">Puntaje</label>
            </th>
        </thead>
        <tbody>
            <tr>
                <td>
                    <input type="hidden" value="{$student->id_alumno}"id="id_alumno">
                    <input type="text" id="contenido" name="contenido">
                </td>
                <td>
                    <select  id="puntaje">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </td>
                <td>
                    <button type="submit" id="btnenviar">Cargar</button>
                </td>
            </tr>
        </tbody>
    </table>
{/if}
    
{include "templates/vue/comentarios.tpl"}
<button id="btn-refresh">Actualizar!</button>
</table>
<script src="js/showstudents.js"></script>
<script src="js/crearComentario.js"></script>
{include "templates/footer.tpl"}