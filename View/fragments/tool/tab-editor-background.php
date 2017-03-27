<div class="app-tool-editor-controls-container">
    <div class="app-tool-editor-controls-spacer"></div>
    <p class="app-tool-editor-controls-header">Plano de fundo</p>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-editor-controls-50">
        <input class="mdl-textfield__input" type="text" id="background-image">
        <label class="mdl-textfield__label" for="height">Imagem</label>
    </div>

    <div class="app-tool-editor-controls-50">
        <p class="app-tool-editor-controls-description">Cor</p>
        <input type="color" id="background-color" class="app-tool-editor-controls-color-picker-input">
        <button id="app-button-background-color" class="mdl-button mdl-js-button mdl-button--accent app-tool-editor-controls-color-picker-button" disabled>
            X
        </button>
        <div class="mdl-tooltip" for="app-button-background-color">
            Voltar ao estado inicial<br>(não definido)
        </div>
    </div>

</div>

<div class="app-tool-editor-controls-container">
    <p class="app-tool-editor-controls-header app-tool-editor-controls-100">Repetição</p>
    <div class="app-tool-editor-controls-container">
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="initial_b">
            <input type="radio" id="initial_b" class="mdl-radio__button" name="background-repeat" value="initial_b" checked>
            <span class="mdl-radio__label">Inicial (não definido)</span>
        </label><br/>

        <div class="app-tool-editor-controls-50">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="repeat-x">
                <input type="radio" id="repeat-x" class="mdl-radio__button" name="background-repeat" value="repeat-x">
                <span class="mdl-radio__label">Horizontal</span>
            </label><br/>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="repeat-y">
                <input type="radio" id="repeat-y" class="mdl-radio__button" name="background-repeat" value="repeat-y">
                <span class="mdl-radio__label">Vertical</span>
            </label>
        </div>

        <div class="app-tool-editor-controls-50">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="repeat">
                <input type="radio" id="repeat" class="mdl-radio__button" name="background-repeat" value="repeat">
                <span class="mdl-radio__label">Ambos</span>
            </label><br/>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="no-repeat">
                <input type="radio" id="no-repeat" class="mdl-radio__button" name="background-repeat" value="no-repeat">
                <span class="mdl-radio__label">Não Repetir</span>
            </label>
        </div>
    </div>
</div>




