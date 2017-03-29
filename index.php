<?php

require_once "Controller/controller.php";

$controller = new Controller();

if (isset($_GET["url"])) {
    $controller->getView($_GET["url"]);
} else {
    header('Location: ?url=index');
}
