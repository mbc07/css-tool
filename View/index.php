<!DOCTYPE html>

<html>
    <head>
        <?php include 'fragments/head.php'; ?>

    </head>

    <body>
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">
            <header class="mdl-layout__header app-toolbar">
                <div class="mdl-layout__header-row">
                    <!-- Title -->
                    <span class="mdl-layout-title"><?= APP_NAME ?></span>
                    <div class="mdl-layout-spacer"></div>
                        <button id="app-account-button" class="mdl-button mdl-js-button mdl-button--icon">
                            
                            <!-- <img src="https://www.gravatar.com/avatar/<hash md5 do email>?d=identicon"> -->
                            <i class="material-icons">account_circle</i>
                        </button>
                </div>
                <!-- Tabs -->
                <nav class="mdl-layout__tab-bar mdl-js-ripple-effect">
                    <a href="#home" class="mdl-layout__tab is-active">Início</a>
                    <a href="#tool" class="mdl-layout__tab">Ferramenta</a>
                    <a href="#about" class="mdl-layout__tab">Sobre</a>
                </nav>
            </header>
            <main class="mdl-layout__content">
                <section class="mdl-layout__tab-panel is-active" id="home">
                    <div class="page-content">
                        
                        
                        
                    </div>
                </section>
                <section class="mdl-layout__tab-panel" id="tool">
                    <div class="page-content">
                    
                    
                    </div>
                </section>
                <section class="mdl-layout__tab-panel" id="about">
                    
                    
                    
                </section>
            </main>
        </div>
    </body>
</html>
