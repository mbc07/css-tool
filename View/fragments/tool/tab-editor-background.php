<?php ?>
<p>Cor do plano de fundo
    <input  type="color" id="background-color">  <button class="mdl-button mdl-js-button mdl-button--primary" disabled>
  X
</button></p>

<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    <input class="mdl-textfield__input" type="text" id="background-image">
    <label class="mdl-textfield__label" for="height">Imagem do plano de fundo</label>
</div>
<p>Repetição</p>
<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="initial_b">
    <input type="radio" id="initial_b" class="mdl-radio__button" name="background-repeat" value="1" checked>
    <span class="mdl-radio__label">Não definido</span>
</label><br/>
<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="repeat">
    <input type="radio" id="repeat" class="mdl-radio__button" name="background-repeat" value="2">
    <span class="mdl-radio__label">Ambos</span>
</label>
<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="repeat-x">
    <input type="radio" id="repeat-x" class="mdl-radio__button" name="background-repeat" value="3">
    <span class="mdl-radio__label">Horizontal</span>
</label>
<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="repeat-y">
    <input type="radio" id="repeat-y" class="mdl-radio__button" name="background-repeat" value="4">
    <span class="mdl-radio__label">Vertical</span>
</label>
<label class="mdl-radio mdl-js-radio mdl-js-ripple-effect" for="no-repeat">
    <input type="radio" id="no-repeat" class="mdl-radio__button" name="background-repeat" value="5">
    <span class="mdl-radio__label">Não Repetir</span>
</label>
