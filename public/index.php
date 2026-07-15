<?php

session_start();

require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';
require_once __DIR__ . '/../app/controllers/DashboardController.php';
require_once __DIR__ . '/../app/helpers/AuthHelper.php';

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

    case 'dashboard':

        AuthHelper::requireAdmin();

        $controller = new DashboardController();
        $controller->index();

        break;

    default:
        echo "404 - Página não encontrada";
}