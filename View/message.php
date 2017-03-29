<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header mdl-layout--fixed-tabs">
        <?php include "fragments/navbar.php"; ?>

        <main class="mdl-layout__content">
            <section class="mdl-layout__tab-panel is-active" id="msg">
                <div class="page-content">
                    <div class="mdl-grid">
                        <div class="mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--12-col app-common-content-card">
                            <h3>Atenção!</h3>
                            <p><?php echo $msg; ?> .</p>
                        </div>
                    </div>
                </div>
                
                <div class="app-common-footer-spacer"></div>
            </section>
        </main>
    </div>
</body>

<?php include 'fragments/footer.php'; ?>
