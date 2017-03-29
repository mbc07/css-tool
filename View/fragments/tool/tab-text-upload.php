<form action="?url=upload" method="post">
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-upload-card-text-area">
        <textarea class="mdl-textfield__input app-tool-upload-card-text-area" rows="8" id="text-upload" name="texto"></textarea>
        <label class="mdl-textfield__label" for="text-upload">Código HTML a ser formatado</label>
    </div>

    <div class="mdl-card__actions">
        <input id="app-tool-text-upload-button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" value="Enviar">
        <?php
        clearstatcache();
        if (file_exists("Model/uploads/" . md5(trim($_SESSION["id_usuario"])) . ".html")) {
            echo '        
            <div class="mdl-tooltip" for="app-tool-text-upload-button">
                Ao continuar, o arquivo enviado<br/>anteriormente será excluído!
            </div>';
        }
        ?>
    </div>
</form>
