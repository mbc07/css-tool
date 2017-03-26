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
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= APP_NAME ?></title>

    <!-- Folhas de estilo -->
    <link rel="stylesheet" type="text/css" href="../View/assets/css/mdl/material<?= isMinified('css') ?>">
    <link rel="stylesheet" type="text/css" href="../View/assets/css/common.css">
    <link rel="stylesheet" type="text/css" href="../View/assets/css/navbar.css">
    <link rel="stylesheet" type="text/css" href="../View/assets/css/tool.css">

    <!-- Fontes -->
    <link rel="stylesheet" type="text/css" href="../View/assets/css/fonts/icons/material-icons.css">
    <link rel="stylesheet" type="text/css" href="../View/assets/css/fonts/roboto/roboto.css">

    <!-- Bibliotecas -->
    <script  src="../View/assets/js/mdl/material<?= isMinified('js') ?>" charset="UTF-8"></script>
    <script src="../View/assets/js/jquery/<?= JQUERY_VERSION . isMinified('js') ?>" charset="UTF-8"></script>
    <script src="../View/assets/js/common.js" charset="UTF-8"></script>
    <script src="../View/assets/js/navbar.js" charset="UTF-8"></script>
    <script src="../View/assets/js/tool.js" charset="UTF-8"></script>
</head>
