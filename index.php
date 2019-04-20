<?php

if (isset($_GET['page']) AND !empty($_GET['page'])) {
    $page = trim(strtolower($_GET['page']));
} else {
    $page = 'home';
}

$allPages = scandir('Controllers/');

if (in_array($page.'_controller.php', $allPages)) {
    require 'Models/' . $page . '_model.php';
    require 'Controllers/' . $page . '_controller.php';
    require 'Views/' . $page . '_view.php';
} else {
    require './Views/Errors/error-404.php';
}
