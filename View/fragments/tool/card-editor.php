<?php ?>

<div class="mdl-cell mdl-cell--3-col">
    <div class="mdl-color-text--grey-800">
        <button id="app-tool-back-button" class="mdl-button mdl-js-button mdl-button--icon">
            <i class="material-icons">arrow_back</i>
        </button>
    </div>
    <h3>Placeholder</h3>
    <p>Espaço reservado para os cards de edição dos atributos. <a id="app-account-button" href="#" onclick="toggleAccountMenu(); return false;">Teste do card de usuário</a></p>

</div>

<div class="mdl-cell mdl-cell--9-col">
    <div class="mdl-card mdl-shadow--2dp mdl-color--yellow-200 app-tool-preview-card-container">
        <div class="mdl-grid app-tool-preview-card-inner">
            <div class="mdl-cell mdl-cell--2-col">
                <div id="app-tag-container">
                    <p><strong>Tags</strong></p>
                    <ul>
                        <li><a onmouseover="updateSelectedElementOverlay('h1',true)" onmouseout="updateSelectedElementOverlay('h1',false)">h1</a></li>
                        <li><a onmouseover="updateSelectedElementOverlay('h2',true)" onmouseout="updateSelectedElementOverlay('h2',false)">h2</a></li>
                        <li><a onmouseover="updateSelectedElementOverlay('h3',true)" onmouseout="updateSelectedElementOverlay('h3',false)">h3</a></li>
                        <li><a onmouseover="updateSelectedElementOverlay('p',true)" onmouseout="updateSelectedElementOverlay('p',false)">p</a></li>

                    </ul>
                </div>
            </div>

            <div id="app-iframe-container" class="mdl-cell mdl-cell--7-col mdl-card mdl-card--expand mdl-shadow--2dp">
                <iframe id="app-tool-iframe" class="app-tool-preview-iframe" src="assets/test.html"></iframe>
    
               
            </div>
        </div>

        <div class="mdl-card__actions mdl-card--border app-tool-preview-card-bottom">
            <div class="app-tool-preview-card-element-text"><p><strong>Elemento selecionado:</strong> <span id="app-selected-element-text">nenhum</span></p>
            </div>

            <button id="app-tool-download-button" 
                    class="mdl-button mdl-js-button 
                    mdl-button--raised mdl-js-ripple-effect 
                    mdl-button--primary">Gerar CSS</button>
        </div>
    </div>
</div>
