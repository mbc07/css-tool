<?php ?>

<div class="mdl-cell mdl-cell--4FF-col">
    <div class="mdl-color-text--grey-800">
        <button id="app-tool-back-button" class="mdl-button mdl-js-button mdl-button--icon">
            <i class="material-icons">arrow_back</i>
        </button>
    </div>
    <h3>Placeholder</h3>
    <p>Espaço reservado para os cards de edição dos atributos. <a id="app-account-button" href="#" onclick="toggleAccountMenu(); return false;">Teste do card de usuário</a></p>

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
                <iframe id="app-tool-iframe" class="app-tool-preview-iframe" src="assets/test.html"></iframe>
            </div>
        </div>

        <div class="mdl-card__actions mdl-card--border app-tool-preview-card-bottom">
            <div class="app-tool-preview-card-text"><p><strong>Elemento selecionado:</strong> <span id="app-selected-element-text">nenhum</span></p>
            </div>

            <button id="app-tool-download-button" 
                    class="mdl-button mdl-js-button 
                    mdl-button--raised mdl-js-ripple-effect 
                    mdl-button--primary" onclick="addElementToTagList('h1', 'h1')">Gerar CSS</button>
        </div>
    </div>
</div>
