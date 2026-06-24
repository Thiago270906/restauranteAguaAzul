<?php

require_once __DIR__ . '/../app/Controllers/HomeController.php';
require_once __DIR__ . '/../app/Controllers/AuthController.php';

$action = $_GET['action'] ?? 'home';

switch ($action) {

    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;

    case 'showLogin':
        $controller = new AuthController();
        $controller->showLogin();
        break;

    case 'login':
        $controller = new AuthController();
        $controller->login();
        break;

    default:
        echo "404 - Página não encontrada";
}