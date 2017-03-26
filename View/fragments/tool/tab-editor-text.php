<div class="app-tool-editor-controls-container">
    <div class="app-tool-editor-controls-spacer"></div>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-editor-controls-100">
        <input class="mdl-textfield__input" type="text" id="font-family">
        <label class="mdl-textfield__label" for="font-family">Fonte</label>
    </div>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-editor-controls-25">
        <input class="mdl-textfield__input" type="text" id="font-size">
        <label class="mdl-textfield__label" for="font-family">Tamanho</label>
    </div>

    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label app-tool-editor-controls-25">
        <input class="mdl-textfield__input" type="text" id="font-weight">
        <label class="mdl-textfield__label" for="font-weight">Peso</label>
    </div>

    <div class="app-tool-editor-controls-50">
        <p class="app-tool-editor-controls-description">Cor do texto</p>
        <input type="color" id="color" class="app-tool-editor-controls-color-picker-input">
        <button id="app-button-color" class="mdl-button mdl-js-button mdl-button--accent app-tool-editor-controls-color-picker-button" disabled>
            X
        </button>
        <div class="mdl-tooltip" for="app-button-color">
            Voltar ao estado inicial<br>(não definido)
        </div>
    </div>

    <div class="app-tool-editor-controls-100">
        <label class="mdl-checkbox mdl-js-checkbox mdl-js-ripple-effect" for="small-caps">
            <input type="checkbox" id="small-caps" class="mdl-checkbox__input">
            <span class="mdl-checkbox__label">Texto em versalete <sup><a href="https://pt.wikipedia.org/wiki/Versalete" target="_blank">?</a></sup></span>
        </label>
    </div>
</div>


<div class="app-tool-editor-controls-container">
    <div class="app-tool-editor-controls-spacer"></div>
    <p class="app-tool-editor-controls-header app-tool-editor-controls-100">Estilo</p>
    <div class="app-tool-editor-controls-container">

        <div class="app-tool-editor-controls-50">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="initial_f0">
                <input type="radio" id="initial_f0" class="mdl-radio__button" name="font-style" value="1" checked>
                <span class="mdl-radio__label">Inicial</span>
            </label><br/>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="normal">
                <input type="radio" id="normal" class="mdl-radio__button" name="font-style" value="2">
                <span class="mdl-radio__label">Normal</span>
            </label>
        </div>

        <div class="app-tool-editor-controls-50">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="italic">
                <input type="radio" id="italic" class="mdl-radio__button" name="font-style" value="3">
                <span class="mdl-radio__label">Itálico</span>
            </label><br/>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="oblique">
                <input type="radio" id="oblique" class="mdl-radio__button" name="font-style" value="4">
                <span class="mdl-radio__label">Oblíquo</span>
            </label>
        </div>
    </div>
</div>

<div class="app-tool-editor-controls-container">
    <div class="app-tool-editor-controls-spacer"></div>
    <p class="app-tool-editor-controls-header app-tool-editor-controls-100">Alinhamento</p>
    <div class="app-tool-editor-controls-container">
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="initial_f1">
            <input type="radio" id="initial_f1" class="mdl-radio__button" name="text-align" value="1" checked>
            <span class="mdl-radio__label">Inicial (não definido)</span>
        </label><br/>

        <div class="app-tool-editor-controls-50">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="left_f">
                <input type="radio" id="left_f" class="mdl-radio__button" name="text-align" value="2">
                <span class="mdl-radio__label">Esquerda</span>
            </label><br/>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="right_f">
                <input type="radio" id="right_f" class="mdl-radio__button" name="text-align" value="3">
                <span class="mdl-radio__label">Direita</span>
            </label>
        </div>

        <div class="app-tool-editor-controls-50">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="center">
                <input type="radio" id="center" class="mdl-radio__button" name="text-align" value="4">
                <span class="mdl-radio__label">Centralizar</span>
            </label><br/>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="justify">
                <input type="radio" id="justify" class="mdl-radio__button" name="text-align" value="5">
                <span class="mdl-radio__label">Justificar</span>
            </label>
        </div>
    </div>
</div>

<div class="app-tool-editor-controls-container">
    <div class="app-tool-editor-controls-spacer"></div>
    <p class="app-tool-editor-controls-header app-tool-editor-controls-100">Decoração</p>
    <div class="app-tool-editor-controls-container">
        <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="initial_f2">
            <input type="radio" id="initial_f2" class="mdl-radio__button" name="text-decoration" value="1" checked>
            <span class="mdl-radio__label">Inicial (não definido)</span>
        </label><br/>

        <div class="app-tool-editor-controls-50">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="none">
                <input type="radio" id="none" class="mdl-radio__button" name="text-decoration" value="2">
                <span class="mdl-radio__label">Nenhum</span>
            </label><br/>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="underline">
                <input type="radio" id="underline" class="mdl-radio__button" name="text-decoration" value="3">
                <span class="mdl-radio__label">Sublinhado</span>
            </label>
        </div>

        <div class="app-tool-editor-controls-50">
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="overline">
                <input type="radio" id="overline" class="mdl-radio__button" name="text-decoration" value="4">
                <span class="mdl-radio__label">Sobrelinhado</span>
            </label><br/>
            <label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="line-through">
                <input type="radio" id="line-through" class="mdl-radio__button" name="text-decoration" value="5">
                <span class="mdl-radio__label">Riscado</span>
            </label>
        </div>
    </div>
</div>
