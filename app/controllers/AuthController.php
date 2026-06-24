<?php

require_once __DIR__ . '/../models/Usuario.php';
require_once __DIR__ . '/../Services/AuthService.php';

class AuthController
{
    private $service;

    public function __construct()
    {

        $this->service = new AuthService;
    }

    public function showLogin()
    {
        require_once __DIR__ . '/../views/auth/login.php';
    }

    public function login()
    {
        try {

            $email = trim($_POST['email']);
            $senha = trim($_POST['senha']);

            $usuario = $this->service->loginProcess($email, $senha);

            header("Location: index.php?acao=home");

            exit;


        } catch(Exception $e) {

            $_SESSION['erro'] = $e->getMessage();

            header("Location: index.php");

            exit;
        }
    }

    public function logout()
    {
        session_destroy();

        header("Location: index.php");

        exit;
    }
}

?>