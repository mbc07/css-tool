<?php ?>

<form action="?url=cad" method="post">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-account-card-shared-input-left">
        <input class="mdl-textfield__input" type="text" id="register-nome" name="nome">
        <label class="mdl-textfield__label" for="register-nome">Nome</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-account-card-shared-input-right">
        <input class="mdl-textfield__input" type="text" id="register-snome" name="snome">
        <label class="mdl-textfield__label" for="register-snome">Sobrenome</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="email" id="register-email" name="email">
        <label class="mdl-textfield__label" for="register-email">E-mail</label>
    </div><br/>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-account-card-shared-input-left">
        <input class="mdl-textfield__input" type="password" pattern=".{8,}" id="register-senha" name="senha">
        <label class="mdl-textfield__label" for="register-senha">Senha</label>
        <span class="mdl-textfield__error">No mínimo 8 caracteres</span>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-account-card-shared-input-right">
        <input class="mdl-textfield__input" type="password" pattern=".{8,}" id="register-senhac" name="senhac">
        <label class="mdl-textfield__label" for="register-csenha">Confirmar Senha</label>
    </div>

    <div class="app-account-card-spacer"></div>

    <div class="mdl-card__actions">
        <input class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect app-account-card-left-button" type="reset" value="Limpar">
        <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent app-account-card-right-button" type="submit" value="Cadastrar" name="submit">
    </div>
</form>
