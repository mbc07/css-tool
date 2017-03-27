<!DOCTYPE html>

<html>
<head>
	<title>Mensagem</title>
	<meta charset="UTF-8">
</head>
<body>
	<div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">
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
	<a href="pageController.php?url=index" class="mdl-layout__tab is-active">Início</a>
	<a href="pageController.php?url=index" class="mdl-layout__tab">Ferramenta</a>
	<a href="pageController.php?url=index" class="mdl-layout__tab">Sobre</a>
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

<div class="mdl-color--white content mdl-color-text--grey-800 mdl-cell mdl-cell--12-col">
	<h3>Atenção!</h3>
	<p><?php echo $msg; ?> .</p>
</div>



</div>
</body>
</html>
