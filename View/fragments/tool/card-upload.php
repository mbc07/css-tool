<div class="mdl-color--white content mdl-color-text--grey-800 mdl-cell mdl-cell--6-col">
    <h3>Bem Vindo!</h3>
    <p>Para começar, copie e cole o código HTML ou faça upload do arquivo que deseja formatar. O arquivo ficará armazenado no site, permitindo edição futura.</p>
    <?php
    clearstatcache(); 
    if (file_exists("Model/uploads/" . md5(trim($_SESSION["id_usuario"])) . ".html")) {
        echo '
        <p>Detectamos que você já possui um arquivo HTML armazenado no site, se preferir, poderá continuar de onde parou.<br/>
            <button id="app-tool-resume-button" onclick="window.location = \'?url=editor\';" class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                Iniciar a ferramenta
            </button>
        </p>';
    }
    ?>
</div>


<div class="mdl-color--white mdl-shadow--2dp content mdl-color-text--grey-800 mdl-cell mdl-cell--6-col">
    <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect mdl-color--yellow-200 app-tool-upload-card">
        <div class="mdl-card__title mdl-tabs__tab-bar">
            <a href="#text_upload" class="mdl-tabs__tab is-active">Texto</a>
            <a href="#file_upload" class="mdl-tabs__tab">Upload</a>
        </div>

        <div class="mdl-card__supporting-text mdl-tabs__panel is-active" id="text_upload">

            <?php include "tab-text-upload.php"; ?>

        </div>

        <div class="mdl-card__supporting-text mdl-tabs__panel" id="file_upload">

            <?php include "tab-file-upload.php"; ?>

        </div>
    </div>
</div>
