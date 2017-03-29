<?php

/**
 * Definição de constantes utilizadas em páginas dinâmicas do View
 *
 * @author Mateus B. Cassiano
 * @author  
 * @author 
 * @version 1.0
 * @since css-tool 2017-1
 * @link 
 */
define('APP_NAME', 'CSS Tool');
define('APP_VERSION', '1.0');
define('APP_DEBUG_CSS', false);
define('APP_DEBUG_JS', true);
define('JQUERY_VERSION', 'jquery-3.2.0');

// Retorna a versão "minified" (script.min.js/style.min.css) se a depuração estiver desligada
function isMinified($ext) {
    switch ($ext) {
        case 'js':
            return APP_DEBUG_JS ? ('.' . $ext) : ('.min.' . $ext);
        case 'css':
            return APP_DEBUG_CSS ? ('.' . $ext) : ('.min.' . $ext);
        default:
            return '.' . $ext;
    }
}
