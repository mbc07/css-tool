<!DOCTYPE html>

<html>
    <head>
        <title>Mensagem</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../ex07/View/mensagemCSS.css" rel="stylesheet" type="text/css">
        <link href="../ex07/View/menubar.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <ul>
            <li><a class="active" href="?op=">Home</a></li>
            <li><a href="?op=novo">Novo</a></li>
            <li><a href="?op=lista">Lista de Contato</a></li>
            <li><a href="?op=out">Sair</a></li>
        </ul>

        <div style="margin-left:30%;padding:1px 16px;height:1000px;">
            <?php echo "<h1>".$msg."</h1>" ?>
        </div>


    </body>
</html>
