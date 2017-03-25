<?php ?>

<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
    <div class="mdl-card__title mdl-tabs__tab-bar">
        <a href="#login" class="mdl-tabs__tab is-active">Login</a>
        <a href="#register" class="mdl-tabs__tab">Registro</a>
    </div>

    <div class="mdl-card__supporting-text mdl-tabs__panel is-active" id="login">

        <?php include 'fragments/account/tab-login.php'; ?>

        <?php include 'fragments/account/tab-reset.php'; ?>

    </div>

    <div class="mdl-card__supporting-text mdl-tabs__panel" id="register">

        <?php include 'fragments/account/tab-register.php'; ?>

    </div>
</div>
