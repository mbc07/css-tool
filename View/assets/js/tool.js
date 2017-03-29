// Arrays contendo os elementos editados
var editedElements = [];
var selectedElementIndex = null;


function updateIframeMinHeight() {
    var iframe = $('#app-tool-iframe');
    var container = $('#app-iframe-container');

    if (container.height() > iframe.height())
        iframe.css('min-height', container.height());

    return;
}

// Atualiza o texto do elemento selecionado no editor
function updateSelectedElement(element) {
    var target = $('#app-selected-element-text');
    var containerID = 'app-selected-element-text';
    var selectedID = 'app-tool-preview-card-li-selected';

    if (!element)
        element = 'nenhum';

    target.replaceWith('<span id="' + containerID + '">' + element + '</span>');

    $('[data-selector="' + target.text() + '"]').parent().removeClass(selectedID);
    $('[data-selector="' + element + '"]').parent().addClass(selectedID);

    if (!$('#app-editor-controls').is(":visible")) {
        $('#app-editor-greeting').slideToggle(250);
        $('#app-editor-controls').slideToggle(250);
    }

    if (selectedElementIndex)
        saveEditedElement(selectedElementIndex);

    checkEditedElements(element);
    return;
}

// Mostra/oculta overlay do elemento selecionado no iFrame
function showSelectionOverlay(element, visible) {
    var iframe = $('#app-tool-iframe');
    var overlay = 'app-tool-iframe-css-overlay';

    // Injeta estilo do overlay dentro do iframe se ainda não existir
    if (!iframe.contents().find('#' + overlay).length) {
        iframe.contents().find('html').append('\
        <style id="' + overlay + '"> .' + overlay + ' {\n\
        background-color: rgba(255, 110, 64, 0.5) !important;\n\
        } </style>');
    }

    if (visible)
        iframe.contents().find(element).addClass(overlay);
    else
        iframe.contents().find(element).removeClass(overlay);

    return;
}

// Adiciona elemento na lista de seletores e define os eventos do mouse
// Se o elemento já existe na lista de seletores, nada acontece
function addElementToTagList(element) {
    if (!$('[data-selector="' + element + '"]').length) {
        $('#app-tool-tag-container').append(
                '<li class="app-tool-preview-card-li"><a href="#" data-selector="' +
                element + '">' + element + '</a></li>');

        var newElement = $('[data-selector="' + element + '"]');

        newElement.click(function () {
            updateSelectedElement(element);
        });

        newElement.mouseover(function () {
            showSelectionOverlay(element, true);
        });

        newElement.mouseout(function () {
            showSelectionOverlay(element, false);
        });
    }
    return;
}

// Recebe uma string contendo um ou mais elementos (ex. várias classes ou IDs) 
// e um prefixo e adiciona cada classe/ID individual na lista de elementos
function addMultipleElementToTagList(prefix, element) {
    if (!prefix)
        prefix = '';

    if (element) {
        if (String(element).indexOf(' ') !== -1) {
            var tmp = String(element).split(' ');
            for (var i = 0; i < tmp.length; i++) {
                addElementToTagList(prefix + tmp[i]);
            }
        } else {
            addElementToTagList(prefix + element);
        }
    }
    return;
}

// Chama função ao redimensionar a janela
$(window).resize(updateIframeMinHeight);

// Escaneia e adiciona todos os elementos do iframe 
// na lista de seletores ao carregar a página
$(document).ready(function () {
    $('#app-tool-tag-container').css('max-height', $(window).height() * 0.65);

    $('#app-tool-iframe').on('load', function () {
        $('#app-tool-iframe').contents().find('*').each(function () {

            addElementToTagList($(this).prop("nodeName").toLowerCase());
            addMultipleElementToTagList('.', $(this).attr('class'));
            addMultipleElementToTagList('#', $(this).attr('id'));

        });
    });
});

function enableUnsavedChangesWarning() {
    $(window).on('beforeunload', function () {
        return 'Suas alterações serão perdidas!';
    });
    return;
}

function loadElementIntoEditor(i) {
    clearEditor();

    updateMDLInput($('#margin'), editedElements[i].margin);
    updateMDLInput($('#border'), editedElements[i].border);
    updateMDLInput($('#padding'), editedElements[i].padding);
    updateMDLInput($('#z-index'), editedElements[i].zindex);
    updateMDLInput($('#left'), editedElements[i].left);
    updateMDLInput($('#right'), editedElements[i].right);
    updateMDLInput($('#top'), editedElements[i].top);
    updateMDLInput($('#bottom'), editedElements[i].bottom);

    updateMDLInput($('#width'), editedElements[i].width);
    updateMDLInput($('#height'), editedElements[i].height);
    updateMDLInput($('#min-width'), editedElements[i].minwidth);
    updateMDLInput($('#min-height'), editedElements[i].minheight);
    updateMDLInput($('#max-width'), editedElements[i].maxwidth);
    updateMDLInput($('#max-height'), editedElements[i].maxheight);

    updateMDLInput($('#background-image'), editedElements[i].backgroundimage);
    updateMDLInput($('#background-color'), editedElements[i].backgroundcolor);

    updateMDLInput($('#color'), editedElements[i].color);
    updateMDLInput($('#font-family'), editedElements[i].fontfamily);
    updateMDLInput($('#font-size'), editedElements[i].fontsize);
    updateMDLInput($('#font-weight'), editedElements[i].fontweight);

    updateMDLRadio('position', editedElements[i].position);
    updateMDLRadio('overflow', editedElements[i].overflow);
    updateMDLRadio('background-repeat', editedElements[i].backgroundrepeat);
    updateMDLRadio('font-style', editedElements[i].fontstyle);
    updateMDLRadio('text-align', editedElements[i].textalign);
    updateMDLRadio('text-decoration', editedElements[i].textdecoration);

    if (editedElements[i].fontvariant == 'small-caps') {
        $('#small-caps').prop('checked', true);
        $('#small-caps').parent().addClass('is-checked');
    }

}

function saveEditedElement(i) {
    editedElements[i].margin = $('#margin').val();
    editedElements[i].border = $('#border').val();
    editedElements[i].padding = $('#padding').val();
    editedElements[i].zindex = $('#z-index').val();
    editedElements[i].left = $('#left').val();
    editedElements[i].right = $('#right').val();
    editedElements[i].top = $('#top').val();
    editedElements[i].bottom = $('#bottom').val();

    editedElements[i].width = $('#width').val();
    editedElements[i].height = $('#height').val();
    editedElements[i].minwidth = $('#min-width').val();
    editedElements[i].minheight = $('#min-height').val();
    editedElements[i].maxwidth = $('#max-width').val();
    editedElements[i].maxheight = $('#max-height').val();

    editedElements[i].backgroundimage = $('#background-image').val();
    editedElements[i].backgroundcolor = $('#background-color').val();

    editedElements[i].color = $('#color').val();
    editedElements[i].fontfamily = $('#font-family').val();
    editedElements[i].fontsize = $('#font-size').val();
    editedElements[i].fontweight = $('#font-weight').val();

    editedElements[i].position = $('input[name=position]:checked').val();
    editedElements[i].overflow = $('input[name=overflow]:checked').val();
    editedElements[i].backgroundrepeat = $('input[name=background-repeat]:checked').val();
    editedElements[i].fontstyle = $('input[name=font-style]:checked').val();
    editedElements[i].textalign = $('input[name=text-align]:checked').val();
    editedElements[i].textdecoration = $('input[name=text-decoration]:checked').val();
}

function checkEditedElements(selector) {
    var index = null;

    for (var i = 0; i < editedElements.length; i++)
    {
        if (editedElements[i].id == selector) {
            selectedElementIndex = i;
            loadElementIntoEditor(i);
            return;
        }
    }

    var newElement = {id: selector, margin: '', border: '', padding: '', zindex: '',
        left: '', right: '', top: '', bottom: '', width: '', height: '', minwidth: '',
        minheight: '', maxwidth: '', maxheight: '', backgroundcolor: '', backgroundimage: '',
        color: '', fontfamilly: '', fontsize: '', fontweight: '', position: '', overflow: '',
        backgroundrepeat: '', fontstyle: '', textalign: '', textdecoration: '', fontvariant: ''};
    index = editedElements.push(newElement);

    selectedElementIndex = index - 1;
    loadElementIntoEditor(index - 1);

    return;
}

// Atualiza o valor do campo informado
function updateMDLInput(element, value) {
    if (value) {
        element.val(String(value));
        element.parent().addClass('is-dirty');
    }

    return;
}

// Seleciona botão no grupo de acordo com o valor informado
function updateMDLRadio(group, value) {
    var target;

    if (value) {
        switch (group) {
            case 'position':
                if (value == 'initial')
                    target = $('#initial_p');
                else
                    target = $('#' + value);
                break;

            case 'overflow':
                if (value == 'initial')
                    target = $('#initial_d');
                else
                    target = $('#' + value);
                break;

            case 'background-repeat':
                if (value == 'initial')
                    target = $('#initial_b');
                else
                    target = $('#' + value);
                break;

            case 'font-style':
                if (value == 'initial')
                    target = $('#initial_f0');
                else
                    target = $('#' + value);
                break;

            case 'text-align':
                if (value == 'initial')
                    target = $('#initial_f1');
                else if (value == 'left')
                    target = $('#left_f');
                else if (value == 'right')
                    target = $('#right_f');
                else
                    target = $('#' + value);
                break;

            case 'text-decoration':
                // Em navegadores recentes, o campo text-decoration contém o valor combinado 
                // dos atributos text-decoration-line, text-decoration-color e text-decoration-style,
                // então verificamos e dividimos a string antes de definir o target, se necessário
                if (String(value).indexOf(' ') !== -1) {
                    var tmp = String(value).split(' ');
                    value = tmp[0];
                }

                if (value == 'initial')
                    target = $('#initial_f2');
                else
                    target = $('#' + value);
                break;
        }


        target.prop('checked', true);
        target.parent().addClass('is-checked');
    }

    return;
}

function clearEditor() {
    // Aba Posição
    var inputElements = '#margin #border #padding #z-index #left #right #top #bottom ';

    // Aba Dimensões
    inputElements = inputElements.concat('#width #height #min-width #min-height #max-width #max-height ');

    // Aba Preenchimento
    inputElements = inputElements.concat('#background-image ');

    // Aba Texto
    inputElements = inputElements.concat('#font-family #font-size #font-weight ');

    var tmp = String(inputElements).split(' ');
    for (var i = 0; i < tmp.length; i++) {
        $(tmp[i]).val('');
        $(tmp[i]).parent().removeClass('is-dirty');
    }

    $('input:radio').parent().removeClass('is-checked');
    $('input:checkbox').parent().removeClass('is-checked');

    $('input:radio').removeAttr('checked');
    $('input:checkbox').removeAttr('checked');

    $('#background-color').val('#000000');
    $('#app-button-background-color').prop('disabled', true);

    $('#color').val('#000000');
    $('#app-button-color').prop('disabled', true);

    return;
}

/*
 $('#color').on('input propertychange', function () {
 $('#app-button-color').prop('disabled', false);
 });
 
 $('#background-color').change(function () {
 $('#app-button-background-color').prop('disabled', false);
 });
 
 $('#app-button-color').click(function () {
 alert('trigger');
 $('#color').val('#000000');
 $('#app-button-color').prop('disabled', true);
 });
 
 $('#app-button-background-color').click(function () {
 $('#background-color').val('#000000');
 $('#app-button-background-color').prop('disabled', true);
 });
 
 */

function editorBackButton() {
    window.location = '?url=index';
    return;
}

