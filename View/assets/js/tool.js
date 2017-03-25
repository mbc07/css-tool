
function updateSelectedElementText(newElement) {
    if (!newElement)
        newElement = 'nenhum';
    
     $("#app-selected-element-text" ).replaceWith('<span id="app-selected-element-text">' + newElement + '</span>');
    return;
}


function updateIframeMinHeight() {
    if ($('#app-iframe-container').height() > $('#app-tool-iframe').height())
        $('#app-tool-iframe').css('min-height', $('#app-iframe-container').height());
    return;
}

$(window).resize(updateIframeMinHeight);

function updateSelectedElementOverlay(selector, visible) {
    
    // Injeta estilo do overlay no iframe caso ainda não tenha sido inserido
    if(!$('#app-tool-iframe').contents().find("#app-tool-iframe-css-overlay").length) {
        $('#app-tool-iframe').contents().find("html").append('\
        <style id="app-tool-iframe-css-overlay">\n\
            .app-tool-iframe-css-overlay {\n\
             background-color: rgba(76, 175, 80, 0.5) !important;\n\
        }');
    }
    
    if (visible) {
        $('#app-tool-iframe').contents().find(selector).addClass('app-tool-iframe-css-overlay');
    } else {
        $('#app-tool-iframe').contents().find(selector).removeClass('app-tool-iframe-css-overlay');
    }
    
    return;
}
