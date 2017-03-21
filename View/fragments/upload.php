<h1 class="mdc-typography--display1">Upload</h1>

<form action="#" id="upload">
	<div>
		<div class="mdc-form-field">
			<div class="mdc-textfield mdc-textfield--multiline" data-mdc-auto-init="MDCTextfield">
				<textarea id="html" class="mdc-textfield__input" rows="10" cols="38"></textarea>
				<label for="html" class="mdc-textfield__label">Insira aqui o código HTML ou faça upload do arquivo</label>
			</div>
		</div><br/>
		
		<div class="mdc-form-field">
			<input id="file" type="file">
		</div>
		
	</div><br/>

	<button type="submit"
			class="mdc-button
				   mdc-button--raised
				   mdc-button--primary
				   mdc-ripple-surface"
			data-mdc-auto-init="MDCRipple">
	  Enviar
	</button>
</form>