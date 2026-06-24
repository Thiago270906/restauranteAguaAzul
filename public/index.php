<?php

session_start();

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

    case 'showRegister':
        $controller = new AuthController();
        $controller->showRegister();
        break;

    case 'register':
        $controller = new AuthController();
        $controller->register();
        break;

    case 'logout':
        $controller = new AuthController();
        $controller->logout();
        break;

    default:
        echo "404 - Página não encontrada";
}