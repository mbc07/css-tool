function updateIframeMinHeight() {
    var iframe = $('#app-tool-iframe');
    var container = $('#app-iframe-container');

    if (container.height() > iframe.height())
        iframe.css('min-height', container.height());

    return;
}

// Atualiza o texto do elemento selecionado no editor
function selectedElementText(element) {
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

    loadElementIntoEditor(element);
    return;
}

// Mostra/oculta overlay do elemento selecionado no iFrame
function selectedElementOverlay(selector, visible) {
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
        iframe.contents().find(selector).addClass(overlay);
    else
        iframe.contents().find(selector).removeClass(overlay);

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
            selectedElementText(element);
        });

        newElement.mouseover(function () {
            selectedElementOverlay(element, true);
        });

        newElement.mouseout(function () {
            selectedElementOverlay(element, false);
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

function loadElementIntoEditor(element) {
    clearEditor();

    updateMDLInput($('#margin'), $(element).css('margin'));
    updateMDLInput($('#border'), $(element).css('boder'));
    updateMDLInput($('#padding'), $(element).css('padding'));
    updateMDLInput($('#z-index'), $(element).css('z-index'));
    updateMDLInput($('#left'), $(element).css('left'));
    updateMDLInput($('#right'), $(element).css('right'));
    updateMDLInput($('#top'), $(element).css('top'));
    updateMDLInput($('#bottom'), $(element).css('bottom'));
    
    updateMDLInput($('#width'), $(element).css('width'));
    updateMDLInput($('#height'), $(element).css('height'));
    updateMDLInput($('#min-width'), $(element).css('min-width'));
    updateMDLInput($('#min-height'), $(element).css('min-height'));
    updateMDLInput($('#max-width'), $(element).css('max-width'));
    updateMDLInput($('#max-height'), $(element).css('max-height'));
    
    updateMDLInput($('#background-image'), $(element).css('background-image'));
    updateMDLInput($('#background-color'), $(element).css('background-color'));
    
    updateMDLInput($('#color'), $(element).css('color'));
    updateMDLInput($('#font-family'), $(element).css('font-family'));
    updateMDLInput($('#font-size'), $(element).css('font-size'));
    updateMDLInput($('#font-weight'), $(element).css('font-weight'));
    
}

function updateMDLInput(element, value) {
    if (value) {
        element.val(String(value));
        element.parent().addClass('is-dirty');
    }

    return;
}

function updateMDLRadio(name, value) {
    if (value) {
        $('[name='+name+']').find(value).addAttr('checked', true);
        $('[name='+name+']').find(value).parent().addClass('is-checked');
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