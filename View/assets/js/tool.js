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

    if (!element)
        element = 'nenhum';

    target.replaceWith('<span id="' + containerID + '">' + element + '</span>');

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
    $('#app-tool-iframe').on('load', function () {
        $('#app-tool-iframe').contents().find('*').each(function () {

            addElementToTagList($(this).prop("nodeName").toLowerCase());
            addMultipleElementToTagList('.', $(this).attr('class'));
            addMultipleElementToTagList('#', $(this).attr('id'));
            
        });
    });
});
