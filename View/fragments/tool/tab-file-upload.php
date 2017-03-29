<form action="?url=upload" method="POST" enctype="multipart/form-data">
    <p>Tamanho máximo do arquivo: 1024 KB</p>                
    <input type="file" id="file_upload" accept=".html" name="fileUpload">

    <div class="app-tool-upload-card-spacer"></div>

    <div class="mdl-card__actions">

        <input id="app-tool-file-upload-button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" value="Enviar">
        <?php
        clearstatcache();
        if (file_exists("Model/uploads/" . md5(trim($_SESSION["id_usuario"])) . ".html")) {
            echo '        
            <div class="mdl-tooltip" for="app-tool-file-upload-button">
                Ao continuar, o arquivo enviado<br/>anteriormente será excluído!
            </div>';
        }
        ?>
    </div>
</form>
