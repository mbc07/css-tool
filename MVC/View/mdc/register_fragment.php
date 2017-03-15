<h1 class="mdc-typography--display1">Novo usuário</h1>

<form action="#" id="user-register">
	<div>
		<div class="mdc-form-field">
			<div class="mdc-textfield" data-mdc-auto-init="MDCTextfield">
				<input id="nome" type="text" class="mdc-textfield__input" required>
				<label for="nome" class="mdc-textfield__label">Nome</label>
			</div>
		</div>

		<div class="mdc-form-field">
			<div class="mdc-textfield" data-mdc-auto-init="MDCTextfield">
				<input id="sobrenome" type="text" class="mdc-textfield__input" required>
				<label for="sobrenome" class="mdc-textfield__label">Sobrenome</label>
			</div>
		</div><br/>

		<div class="mdc-form-field">
			<div class="mdc-textfield" data-mdc-auto-init="MDCTextfield">
				<input id="email" type="email" class="mdc-textfield__input" required>
				<label for="email" class="mdc-textfield__label">E-mail</label>
			</div>
		</div>

		<div class="mdc-form-field">
			<div class="mdc-textfield" data-mdc-auto-init="MDCTextfield">
				<input id="cemail" type="email" class="mdc-textfield__input" required>
				<label for="cemail" class="mdc-textfield__label">Confirmar E-mail</label>
			</div>
		</div><br/>
		
		<div class="mdc-form-field">
			<div class="mdc-textfield" data-mdc-auto-init="MDCTextfield">
				<input id="senha" type="password" class="mdc-textfield__input" required pattern=".{8,}" aria-controls="pw-validation-msg">
				<label for="senha" class="mdc-textfield__label">Senha</label>
			</div>
		</div>
		<div class="mdc-form-field">
			<div class="mdc-textfield" data-mdc-auto-init="MDCTextfield">
				<input id="csenha" type="password" class="mdc-textfield__input" required pattern=".{8,}" aria-controls="pw-validation-msg">
				<label for="csenha" class="mdc-textfield__label">Confirmar Senha</label>
			</div>
		</div>
		
		<p class="mdc-textfield-helptext mdc-textfield-helptext--persistent mdc-textfield-helptext--validation-msg" id="pw-validation-msg" role="alert">
			Deve ter no mínimo 8 caracteres
		</p>
		
	</div>

	<button type="submit"
			class="mdc-button
				   mdc-button--raised
				   mdc-button--primary
				   mdc-ripple-surface"
			data-mdc-auto-init="MDCRipple">
	  Enviar
	</button>
	
	<button type="reset"
			class="mdc-button
				   mdc-button--raised
				   mdc-button--secondary
				   mdc-ripple-surface"
			data-mdc-auto-init="MDCRipple">
	  Redefinir
	</button>
</form>