
<?php 
    if(!isset($_SESSION['file']))
        header('Location: ?url=index');
    
    $file = $_SESSION['file'];
?>
<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">
        <?php include "View/fragments/navbar.php"; ?>

        <main class="mdl-layout__content">
            <section class="mdl-layout__tab-panel is-active" id="home">
                <div class="page-content">

                    <div class="mdl-grid">
    					<div class="mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--12-col app-common-content-card">	
    					   <div class="navbar-collapse collapse" id="footer-body">
                                <ul class="nav navbar-nav">
                                   
                                    <li>
                                        <a class='btn' href="Model/file/<?php echo $file;?>.css" download="<?php echo $_SESSION['nome_usuario'];?>.css">
                                            Baixar folha de estilos
                                        </a>
                                    </li>
                                </ul>
                            </div>
	    			
            			</div>
            		</div>
                </div>
            </section>
            <section class="mdl-layout__tab-panel" id="tool">
                <div class="page-content">
                    <?php
                    // Verifica se existe os dados da sessão de login 
                    if (!isset($_SESSION["id_usuario"]) || !isset($_SESSION["nome_usuario"])) {
                        //Usuário não logado
                        include "View/fragments/tool/card-login.php";
                    } else {
                        //Usuário logado
                        include "View/fragments/tool.php";
                    }
                    ?> 

                </div>
            </section>
            <section class="mdl-layout__tab-panel" id="about">

                <!-- TO DO: Refazer o sobre -->
                <?php include "View/fragments/about.php"; ?>

            </section>
        </main>
    </div>
</body>

<?php include 'View/fragments/footer.php'; ?>
