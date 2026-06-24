<?php 

require_once __DIR__ . '/../models/Usuario.php';
require_once __DIR__ . '/../repositories/AuthRepository.php';

class AuthService
{
    private $repository;

    public function __construct()
    {
        $this->repository = new AuthRepository;
    }

    public function loginProcess($email, $senha)
    {
        $usuario = $this->repository->buscarPorEmail($email);

        if(!$usuario)
        {
            throw new Exception("Email ou senha inválidos.");
        }

        if(!password_verify($senha, $usuario->getSenha()))
        {
            throw new Exception("Email ou senha inválidos.");
        }

        $_SESSION['usuario'] = [
            'id' => $usuario->getId(),
            'nome' => $usuario->getNome(),
            'email' => $usuario->getEmail(),
            'cargo' => $usuario->getCargo()
        ];

        return $usuario;
    }
}

?>