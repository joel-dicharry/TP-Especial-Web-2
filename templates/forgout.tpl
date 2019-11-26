{include "templates/header.tpl"}

<div class="login-wrap">

            <form action="verifyAnswer" method="POST" class="sign-up-htm">
                <div class="group">
                    <label for="pass" class="label">Email Address</label>
                    <input name="email" type="text" class="input">
                </div>
                <div class="group">
                    <label for="question" class="label">Primer direccion de domicilio?</label>
                    <input name="question" type="text" class="input">
                </div>
                <div class="group">
                    <label for="pass" class="label">Nueva Contraseña</label>
                    <input name="password"type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <label for="pass" class="label">Repita nueva contraseña</label>
                    <input name="passwordcheck"type="password" class="input" data-type="password">
                </div>
                <div class="group">
                    <button type="submit" class="button">Cambiar Contraseña</button>
                </div>
                <div class="hr"></div>
            </form>

</div>
{include "templates/footer.tpl"}