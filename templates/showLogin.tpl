{include "templates/header.tpl"}

<div class="login-wrap">
	<div class="login-html">
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">Sign In</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">Sign Up</label>
		<div class="login-form">
		{if !registro}
			<form action="verify" method="POST" class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">Email</label>
					<input name="username" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Contraseña</label>
					<input name="password" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<button type="submit" class="button">Ingresar</button>
				</div>
				<div class="hr"></div>
				<div class="foot-lnk">
					<a href="recuperContraseña">Olvido su Contraseña?</a>
				</div>
			</form>
		{/if}
		{if registro}
			<form action="createUser" method="POST" class="sign-up-htm">
				<div class="group">
					<label for="user" class="label">Nombre</label>
					<input name="username" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Contraseña</label>
					<input name="password"type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Repita contraseña</label>
					<input name="passwordcheck"type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input name="email" type="text" class="input">
				</div>
				<div class="group">
					<label for="question" class="label">Primer direccion de domicilio?</label>
					<input name="question" type="text" class="input">
				</div>
				<div class="group">
					<button type="submit" class="button">Registrarse</button>
				</div>
				<div class="hr"></div>
			</form>
		{/if}
		</div>
	</div>
</div>
{include "templates/footer.tpl"}