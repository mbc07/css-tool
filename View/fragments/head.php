<?php

/** 
 * Inclui o cabeçalho comum para todas as páginas da View
 *
 * @author Mateus B. Cassiano
 * @author  
 * @author 
 * @version 1.0
 * @since css-tool 2017-1
 * @link 
 */

require_once(__DIR__.'/../assets/config.php');

?> 
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title><?= APP_NAME ?></title>

        <link rel="stylesheet" type="text/css" href="assets/css/fonts/icons/material-icons.css">
        <link rel="stylesheet" type="text/css" href="assets/css/fonts/roboto/roboto.css">
        <link rel="stylesheet" type="text/css" href="assets/css/mdl/material<?= isMinified('css') ?>">
        <link rel="stylesheet" type="text/css" href="assets/css/common.css">
        <link rel="stylesheet" type="text/css" href="assets/css/toolbar.css">
        
        <script defer src="assets/js/mdl/material<?= isMinified('js') ?>" charset="UTF-8"></script>
        <script src="assets/js/jquery/<?= JQUERY_VERSION . isMinified('js') ?>" charset="UTF-8"></script>
        <script src="assets/js/common.js" charset="UTF-8"></script>
        <script src="assets/js/toolbar.js" charset="UTF-8"></script>

