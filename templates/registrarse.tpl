{include "templates/header.tpl"}
<form class="form-signin col-md-4 offset-md-4 mt-4">
  <img class="mb-4" src="/docs/4.3/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
  <h1 class="h3 mb-3 font-weight-normal">Formulario de registro</h1>
  <label for="inputEmail" class="sr-only">Correo</label>
  <input type="email" id="inputEmail" class="form-control" placeholder="Email">
  <label for="inputPassword" class="sr-only">Usuario</label>
  <input type="text" id="inputUser" class="form-control" placeholder="Usuario">
  <label for="inputPassword" class="sr-only">Contraseña</label>
  <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña">
  
  <button class="btn btn-lg btn-primary btn-block" type="submit">Registro</button>
</form>
{include "templates/footer.tpl"}