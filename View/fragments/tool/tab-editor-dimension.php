<?php ?>
<div class="app-tool-editor-controls-container">
    <div class="app-tool-editor-controls-spacer"></div>
    <div class="app-tool-editor-controls-50">

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-editor-controls-50">
            <input class="mdl-textfield__input" type="text" id="width">
            <label class="mdl-textfield__label" for="width">Largura</label>
        </div>

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-editor-controls-50">
            <input class="mdl-textfield__input" type="text" id="height">
            <label class="mdl-textfield__label" for="height">Altura</label>
        </div>

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-editor-controls-50">
            <input class="mdl-textfield__input" type="text" id="min-width">
            <label class="mdl-textfield__label" for="min-width">Largura Mínima</label>
        </div>

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-editor-controls-50">
            <input class="mdl-textfield__input" type="text" id="min-height">
            <label class="mdl-textfield__label" for="min-height">Altura Mínima</label>
        </div>

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-editor-controls-50">
            <input class="mdl-textfield__input" type="text" id="max-width">
            <label class="mdl-textfield__label" for="max-width">Largura Máxima</label>
        </div>

        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-editor-controls-50">
            <input class="mdl-textfield__input" type="text" id="max-height">
            <label class="mdl-textfield__label" for="max-height">Altura Máxima</label>
        </div>
    </div>
    <div class="app-tool-editor-controls-50">
        <p class="app-tool-editor-controls-header">Overflow</p>
        <div class="app-tool-editor-controls-container">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect app-tool-editor-controls-100" for="initial_d">
                <input type="radio" id="initial_d" class="mdl-radio__button" name="overflow" value="initial_d" checked>
                <span class="mdl-radio__label">Inicial</span>
            </label><br/>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect app-tool-editor-controls-100" for="visible">
                <input type="radio" id="visible" class="mdl-radio__button" name="overflow" value="visible">
                <span class="mdl-radio__label">Visível</span>
            </label><br/>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect app-tool-editor-controls-100" for="hidden">
                <input type="radio" id="hidden" class="mdl-radio__button" name="overflow" value="hidden">
                <span class="mdl-radio__label">Oculto</span>
            </label><br/>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect app-tool-editor-controls-100" for="scroll">
                <input type="radio" id="scroll" class="mdl-radio__button" name="overflow" value="scroll">
                <span class="mdl-radio__label">Rolar</span>
            </label><br/>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect app-tool-editor-controls-100" for="auto">
                <input type="radio" id="auto" class="mdl-radio__button" name="overflow" value="auto">
                <span class="mdl-radio__label">Automático</span>
            </label>
        </div>
    </div>
</div>
