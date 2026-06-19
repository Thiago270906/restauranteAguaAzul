<?php

require_once __DIR__ . '/../app/Controllers/HomeController.php';
require_once __DIR__ . '/../app/Controllers/AuthController.php';

$action = $_GET['action'] ?? 'home';

switch ($action) {

    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;

    default:
        echo "404 - Página não encontrada";
}