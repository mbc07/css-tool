

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">
        <?php include 'fragments/navbar.php'; ?>

        <main class="mdl-layout__content">
            <section class="mdl-layout__tab-panel is-active" id="home">
                <div class="page-content">

                    <!-- TO DO: Refazer a home -->
                    <?php include 'fragments/home.php'; ?>

                </div>
            </section>
            <section class="mdl-layout__tab-panel" id="tool">
                <div class="page-content">
                    <?php 
                    // Verifica se existe os dados da sessão de login 
                    if(!isset($_SESSION["id_usuario"]) || !isset($_SESSION["nome_usuario"])) 
                    { 
                    //Usuário não logado
                        echo "<h2> USO RESTRITO PARA USUÁRIOS CADASTRADOS!</h2>"; 
                    }else {
                    //Usuário logado
                        include 'fragments/tool.php';
                    }
                    ?> 
                    
                </div>
            </section>
            <section class="mdl-layout__tab-panel" id="about">

                <!-- TO DO: Refazer o sobre -->
                <?php include 'fragments/about.php'; ?>

            </section>
        </main>
    </div>
</body>
