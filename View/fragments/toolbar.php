<?php

/** 
 * Inclui a toolbar do app em todas as páginas da View
 *
 * @author Mateus B. Cassiano
 * @author  
 * @author 
 * @version 1.0
 * @since css-tool 2017-1
 * @link 
 */

require_once(__DIR__.'/../assets/config.php');

?> 
            <header class="mdl-layout__header app-toolbar">
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title"><?= APP_NAME ?></span>
                    <div class="mdl-layout-spacer"></div>
                    <button id="app-account-button" class="mdl-button mdl-js-button mdl-button--icon">
                        <!------------------------------------------------------
                            IMAGEM A SER MOSTRADA QUANDO O USUÁRIO ESTÁ LOGADO 
                        --------------------------------------------------------
                        <img src="https://www.gravatar.com/avatar/<hash md5 do email>?d=identicon"> 
                        -->
                        <i class="material-icons">account_circle</i>
                    </button>
                </div>
                <!-- Tabs -->
                <nav class="mdl-layout__tab-bar mdl-js-ripple-effect">
                    <a href="#home" class="mdl-layout__tab is-active">Início</a>
                    <a href="#tool" class="mdl-layout__tab">Ferramenta</a>
                    <a href="#about" class="mdl-layout__tab">Sobre</a>
                </nav>

                <div id="app-acoount-menu">
                    <span class="app-acoount-arrow">▲</span>
                    <div class="mdl-card mdl-shadow--4dp app-account-card">

                        <!------------------------------------------------------
                            CARD A SER MOSTRADO QUANDO O USUÁRIO ESTÁ LOGADO 
                        --------------------------------------------------------
                        <div class="mdl-card__title">
                            <div id="app-account-card-avatar">
                                <img alt="gravatar" src="https://www.gravatar.com/avatar/2222222222222222?d=identicon" />
                            </div>
                            <div class="mdl-tooltip" for="app-account-card-avatar">
                                Troque de avatar<br/>pelo Gravatar
                            </div>
                            <div class="app-account-card-user-details">
                                <h1 class="mdl-card__title-text">Fulano Beltrano</h1>
                                <h2 class="mdl-card__subtitle-text">fulano@beltrano.net</h2>
                            </div>
                        </div>

                        <div class="app-account-card-spacer-small"></div>

                        <div class="mdl-card__actions">
                            <button class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent app-account-card-right-button">
                                Sair
                            </button>
                        </div> -->
                        
                        <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                            <div class="mdl-card__title mdl-tabs__tab-bar">
                                <a href="#login" class="mdl-tabs__tab is-active">Login</a>
                                <a href="#register" class="mdl-tabs__tab">Registro</a>
                            </div>

                            <div class="mdl-card__supporting-text mdl-tabs__panel is-active" id="login">
                                <form class="app-account-card-login-form" action="#">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="email" id="login-email">
                                        <label class="mdl-textfield__label" for="login-email">E-mail</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="password" id="login-senha">
                                        <label class="mdl-textfield__label" for="login-senha">Senha</label>
                                    </div>

                                    <div class="app-account-card-spacer"></div>

                                    <div class="mdl-card__actions">
                                        <button id="app-account-card-reset-button" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect app-account-card-left-button">
                                            Redefinir Senha
                                        </button>
                                        <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent app-account-card-right-button" type="submit" value="Entrar">
                                    </div>
                                </form>

                                <form class="app-account-card-reset-form" action="#">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="reset-nome" >
                                        <label class="mdl-textfield__label" for="reset-nome">Nome Completo</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="email" id="reset-email" >
                                        <label class="mdl-textfield__label" for="reset-email">E-mail</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-account-card-shared-input-left">
                                        <input class="mdl-textfield__input" type="password" id="reset-senha" >
                                        <label class="mdl-textfield__label" for="reset-senha">Nova Senha</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-account-card-shared-input-right">
                                        <input class="mdl-textfield__input" type="password" id="reset-csenha" >
                                        <label class="mdl-textfield__label" for="reset-csenha">Confirmar Nova Senha</label>
                                    </div>

                                    <div class="app-account-card-spacer"></div>

                                    <div class="mdl-card__actions">
                                        <button id="app-account-card-back-button" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect app-account-card-left-button">
                                            Voltar
                                        </button>
                                        <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent app-account-card-right-button" type="submit" value="Redefinir">
                                    </div>
                                </form>

                            </div>
                            <div class="mdl-card__supporting-text mdl-tabs__panel" id="register">
                                <form action="#">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-account-card-shared-input-left">
                                        <input class="mdl-textfield__input" type="text" id="register-nome" >
                                        <label class="mdl-textfield__label" for="register-nome">Nome</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-account-card-shared-input-right">
                                        <input class="mdl-textfield__input" type="text" id="register-snome" >
                                        <label class="mdl-textfield__label" for="register-snome">Sobrenome</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="email" id="register-email" >
                                        <label class="mdl-textfield__label" for="register-email">E-mail</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-account-card-shared-input-left">
                                        <input class="mdl-textfield__input" type="password" id="register-senha" >
                                        <label class="mdl-textfield__label" for="register-senha">Senha</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-account-card-shared-input-right">
                                        <input class="mdl-textfield__input" type="password" id="register-csenha" >
                                        <label class="mdl-textfield__label" for="register-csenha">Confirmar Senha</label>
                                    </div>

                                    <div class="app-account-card-spacer"></div>

                                    <div class="mdl-card__actions">
                                        <input class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect app-account-card-left-button" type="reset" value="Limpar">
                                        <input class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent app-account-card-right-button" type="submit" value="Cadastrar">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
