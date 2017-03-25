<?php ?>

<form action="#">
    <p>Tamanho máximo do arquivo: 1024 KB</p>                
    <input type="file" id="file_upload" accept=".htm,.html,.xht,.xhtm,.xhtml">

    <div class="app-tool-upload-card-spacer"></div>

    <div class="mdl-card__actions">

        <input id="app-tool-file-upload-button" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent" type="submit" value="Enviar">
        <div class="mdl-tooltip app-tool-resume-editing" for="app-tool-file-upload-button">
            Ao continuar, o arquivo enviado<br/>anteriormente será excluído!
        </div>
    </div>
</form>
