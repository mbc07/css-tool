<div class="app-tool-editor-controls-container">
    <div class="app-tool-editor-controls-spacer"></div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-editor-controls-50">
        <input class="mdl-textfield__input" type="text" id="margin">
        <label class="mdl-textfield__label" for="margin">Margem</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-editor-controls-50">
        <input class="mdl-textfield__input" type="text" id="border">
        <label class="mdl-textfield__label" for="border">Borda</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-editor-controls-50">
        <input class="mdl-textfield__input" type="text" id="padding">
        <label class="mdl-textfield__label" for="padding">Preenchimento</label>
    </div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-editor-controls-50">
        <input class="mdl-textfield__input" type="text" id="z-index">
        <label class="mdl-textfield__label" for="z-index">Camada Z</label>
    </div>
</div>

<div class="app-tool-editor-controls-container">
    <p class="app-tool-editor-controls-header app-tool-editor-controls-100">Posicionamento</p>
    <div class="app-tool-editor-controls-container">
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect app-tool-editor-controls-100" for="initial_p">
            <input type="radio" id="initial_p" class="mdl-radio__button" name="position" value="initial" checked>
            <span class="mdl-radio__label">Inicial (não definido)</span>
        </label><br/>

        <div class="app-tool-editor-controls-50">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="static">
                <input type="radio" id="static" class="mdl-radio__button" name="position" value="static">
                <span class="mdl-radio__label">Estático</span>
            </label><br/>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="relative">
                <input type="radio" id="relative" class="mdl-radio__button" name="position" value="relative">
                <span class="mdl-radio__label">Relativo</span>
            </label>
        </div>

        <div class="app-tool-editor-controls-50">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="fixed">
                <input type="radio" id="fixed" class="mdl-radio__button" name="position" value="fixed">
                <span class="mdl-radio__label">Fixo</span>
            </label><br/>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="absolute">
                <input type="radio" id="absolute" class="mdl-radio__button" name="position" value="absolute">
                <span class="mdl-radio__label">Absoluto</span>
            </label>
        </div>
    </div>
</div>

<div class="app-tool-editor-controls-container">
    <div class="app-tool-editor-controls-spacer"></div>
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-editor-controls-25">
        <input class="mdl-textfield__input" type="text" id="left">
        <label class="mdl-textfield__label" for="left">Esquerda</label>
    </div>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-editor-controls-25">
        <input class="mdl-textfield__input" type="text" id="right">
        <label class="mdl-textfield__label" for="right">Direita</label>
    </div>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-editor-controls-25">
        <input class="mdl-textfield__input" type="text" id="top">
        <label class="mdl-textfield__label" for="top">Superior</label>
    </div>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-editor-controls-25">
        <input class="mdl-textfield__input" type="text" id="bottom">
        <label class="mdl-textfield__label" for="bottom">Inferior</label>
    </div>
</div>
