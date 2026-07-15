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

            header("Location: index.php?action=home");

            exit;


        } catch(Exception $e) {

            $_SESSION['erro'] = $e->getMessage();

            header("Location: index.php");

            exit;
        }
    }

    public function showRegister()
    {
        require_once __DIR__ . '/../views/auth/register.php';
    }

    public function register()
    {
        try {

            $nome = trim($_POST['nome']);
            $email = trim($_POST['email']);
            $senha = trim($_POST['senha']);
            $telefone = trim($_POST['telefone']);
            $cargo = 'cliente';

            $this->service->registerProcess(
                $nome,
                $email,
                $senha,
                $cargo,
                $telefone
            );

            $_SESSION['sucesso'] =
                "Cadastro realizado com sucesso.";

            header("Location: index.php?action=showLogin");

            exit;

        }catch(Exception $e) {

            die($e->getMessage());
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