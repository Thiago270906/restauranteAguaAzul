<?php

session_start();

require_once __DIR__ . '/../app/controllers/HomeController.php';
require_once __DIR__ . '/../app/controllers/AuthController.php';
require_once __DIR__ . '/../app/controllers/DashboardController.php';
require_once __DIR__ . '/../app/controllers/ConfiguracaoController.php';
require_once __DIR__ . '/../app/helpers/AuthHelper.php';

$action = $_GET['action'] ?? 'home';

switch ($action) {

//Website
    case 'home':
        $controller = new HomeController();
        $controller->index();
        break;



//Login e Registros
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



//Admin
    case 'dashboard':

        AuthHelper::requireAdmin();

        $controller = new DashboardController();
        $controller->index();

        break;

    case 'configuracoes':

        AuthHelper::requireAdmin();

        $controller = new ConfiguracaoController();
        $controller->index();

        break;

    case 'atualizarConfiguracoes':

        AuthHelper::requireAdmin();

        $controller = new ConfiguracaoController();
        $controller->atualizar();


    default:
        echo "404 - Página não encontrada";
}