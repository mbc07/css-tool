<div class="mdl-card__title">
    <div class="app-account-card-avatar">
        <img id="app-user-avatar" class="mdl-shadow--2dp" alt="gravatar" src="https://www.gravatar.com/avatar/<?php echo md5(trim($_SESSION["id_usuario"])); ?>?s=200&d=identicon" />
    </div>
    <div class="mdl-tooltip" for="app-user-avatar">
        Troque de avatar<br/>pelo Gravatar
    </div>
    <div class="app-account-card-user-details">
        <h1 class="mdl-card__title-text"><?php echo $_SESSION["nome_usuario"]; ?></h1>
        <h2 class="mdl-card__subtitle-text"><?php echo $_SESSION["id_usuario"]; ?></h2>
    </div>
</div>

<div class="app-account-card-spacer-small"></div>

<div class="mdl-card__actions">
    <a href="?url=logout"><button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent app-account-card-right-button">Sair
        </button></a>
</div>
