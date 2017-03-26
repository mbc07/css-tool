<?php ?>

<form class="app-account-card-reset-form" action="#">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="text" id="reset-nome" >
        <label class="mdl-textfield__label" for="reset-nome">Nome Completo</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
        <input class="mdl-textfield__input" type="email" id="reset-email" >
        <label class="mdl-textfield__label" for="reset-email">E-mail</label>
    </div><br/>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-account-card-shared-input-left">
        <input class="mdl-textfield__input" type="password" pattern=".{8,}" id="reset-senha" >
        <label class="mdl-textfield__label" for="reset-senha">Nova Senha</label>
        <span class="mdl-textfield__error">No mínimo 8 caracteres</span>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-account-card-shared-input-right">
        <input class="mdl-textfield__input" type="password" pattern=".{8,}" id="reset-csenha" >
        <label class="mdl-textfield__label" for="reset-csenha">Confirmar Nova Senha</label>
    </div>

    <div class="app-account-card-spacer"></div>

    <div class="mdl-card__actions">
        <button onclick="toggleLoginResetForm(); return false;" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect app-account-card-left-button">
            Voltar
        </button>
        <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent app-account-card-right-button" type="submit" value="Redefinir">
    </div>
</form>
