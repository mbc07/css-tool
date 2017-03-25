<?php
require_once(__DIR__ . '/../assets/config.php');
?> 
<link rel="stylesheet" type="text/css" href="assets/css/tool.css">
<script src="assets/js/tool.js" charset="UTF-8"></script>

<div class="mdl-grid">
    <div class="mdl-color--white mdl-shadow--4dp content mdl-color-text--grey-800 mdl-cell mdl-cell--12-col">
        <div class="mdl-grid">

            <!-- Usuário não logado -->
            <?php // include 'fragments/tool/card-login.php'; ?>
            
            <!-- Upload do arquivo -->
            <?php // include 'fragments/tool/card-upload.php'; ?>
            
            <!-- Editor -->
            <?php  include 'fragments/tool/card-editor.php'; ?>

        </div>
    </div>
</div>
