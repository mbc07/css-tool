<div class="mdl-grid">
    <div class="mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--12-col">
        <div class="mdl-grid">

            <!-- Usuário não logado -->
            <?php // include 'fragments/tool/card-login.php'; ?>
            
            <!-- Upload do arquivo -->
            <?php   ?>
            
            <!-- Editor -->
            <?php 
                if(!isset($_GET['edit'])){
                   include '../View/fragments/tool/card-upload.php';
                 } else{
                     include '../View/fragments/tool/card-editor.php';
                 }

             ?>

        </div>
    </div>
</div>


<?php include 'footer.php';?>