<?php ?>

<div class="mdl-cell mdl-cell--4-col">
    <div class="mdl-color-text--grey-800 app-tool-editor-header">
        <button id="app-editor-back-button" class="mdl-button mdl-js-button mdl-button--icon">
            <i class="material-icons">arrow_back</i>
        </button>
        <div class="mdl-tooltip" for="app-editor-back-button">
            Suas alterações<br>serão perdidas!
        </div>

        <h4>Editor</h4>
        <div class="app-tool-editor-spacer"></div>

        <p id="app-editor-greeting">Para começar, selecione um elemento na lista de seletores, as alterações são aplicadas em tempo real na prévia. Quando estiver satisfeito, clique no botão para fazer o download a folha de estilos customizada.</p>

        <div id="app-editor-controls" class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
            <div class="mdl-tabs__tab-bar">
                <a href="#positioning" class="mdl-tabs__tab is-active">Posição</a>
                <a href="#dimension" class="mdl-tabs__tab">Dimensões</a>
                <a href="#background" class="mdl-tabs__tab">Preenchimento</a>
                <a href="#text" class="mdl-tabs__tab">Texto</a>
            </div>
            <div class="mdl-tabs__panel is-active" id="positioning">

                <?php include '../View/fragments/tool/tab-editor-position.php'; ?>

            </div>
            <div class="mdl-tabs__panel" id="dimension">
                <?php include '../View/fragments/tool/tab-editor-dimension.php'; ?>
            </div>
            <div class="mdl-tabs__panel" id="background">
                <?php include '../View/fragments/tool/tab-editor-background.php'; ?>
            </div>
            <div class="mdl-tabs__panel" id="text">
                <?php include '../View/fragments/tool/tab-editor-text.php'; ?>
            </div>
        </div>
    </div>
</div>

<div class="mdl-cell mdl-cell--8-col">
    <div class="mdl-card mdl-shadow--2dp mdl-color--yellow-200 app-tool-preview-card-container">
        <div class="mdl-grid app-tool-preview-card-inner">
            <div class="mdl-cell mdl-cell--2-col app-tool-preview-card-tag-container">
                <p>
                    <strong>Seletores</strong>
                </p>
                <ul id="app-tool-tag-container" class="app-tool-preview-card-ul mdl-shadow--2dp">
                    <!-- Área populada automaticamente pela função JS addElementToTagList(element) --> 
                </ul>
            </div>

            <div id="app-iframe-container" class="mdl-cell mdl-cell--6-col mdl-card mdl-card--expand mdl-shadow--2dp">
                <iframe id="app-tool-iframe" class="app-tool-preview-iframe" src="../View/assets/test.html"></iframe>
            </div>
        </div>

        <div class="mdl-card__actions mdl-card--border app-tool-preview-card-bottom">
            <div class="app-tool-preview-card-text"><p><strong>Elemento selecionado:</strong> <span id="app-selected-element-text">nenhum</span></p>
            </div>
            <form action='../../../Controller/' method='post'>
                <button type='submit' id="app-tool-download-button" 
                    class="mdl-button mdl-js-button 
                    mdl-button--raised mdl-js-ripple-effect 
                    mdl-button--primary">Gerar CSS
                </button>
            </form>
        </div>
    </div>
</div>
