<?php
/**
 * Inclui a navbar do app em todas as páginas da View
 *
 * @author Mateus B. Cassiano
 * @author  
 * @author 
 * @version 1.0
 * @since css-tool 2017-1
 * @link 
 */
?>
<header class="mdl-layout__header app-navbar">
    <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title"><?= APP_NAME ?></span>
        <div class="mdl-layout-spacer"></div>
        <button id="app-account-button" onclick="toggleAccountMenu(); return false;" class="mdl-button mdl-js-button mdl-button--icon app-navbar-account-button">
        <!--*******************************************************
            IMAGEM A SER MOSTRADA QUANDO O USUÁRIO ESTÁ LOGADO 
            *******************************************************
        <img id="app-account-button" src="https://www.gravatar.com/avatar/<hash md5 do email>?d=identicon"> 
    -->
    <i id="app-account-button" class="material-icons">account_circle</i>
</button>
</div>
<!-- Tabs -->
<nav class="mdl-layout__tab-bar mdl-js-ripple-effect app-navbar">
    <a href='#home' class="mdl-layout__tab is-active">Início</a>
    <a href="#tool" class="mdl-layout__tab">Ferramenta</a>
    <a href="#about" class="mdl-layout__tab">Sobre</a>
</nav>

<div id="app-acoount-menu">
    <span class="app-acoount-arrow">▲</span>
    <div class="mdl-card mdl-shadow--4dp app-account-card">

        <?php 
        // Verifica se existe os dados da sessão de login 
        if(!isset($_SESSION["id_usuario"]) || !isset($_SESSION["nome_usuario"])) 
        { 
             //Usuário não logado
           include '../View/fragments/account/card-login.php';
        }else {
            //Usuário logado
            include '../View/fragments/account/card-account.php';
        }
        ?> 


    </div>
</div>
</header>
