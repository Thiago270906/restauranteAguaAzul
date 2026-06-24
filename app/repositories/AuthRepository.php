<?php
require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../models/Usuario.php';


class AuthRepository
{
    private $conn;

    public function __construct()
    {
        $db = Database::getInstance();

        $this->conn = $db->getConnection();
    }

    public function buscarPorEmail($email)
    {
        $stmt = $this->conn->prepare(
            "SELECT * FROM usuarios WHERE email = ?"
        );

        $stmt->execute([$email]);

        $dados = $stmt->fetch(PDO::FETCH_ASSOC);

        if(!$dados)
        {
            return null;
        }

        $usuario = new Usuario(
            $dados['nome'],
            $dados['email'],
            $dados['senha_hash'],
            $dados['cargo'],
            $dados['telefone']
        );

        $usuario->setId($dados['id_usuario']);

        return $usuario;
    }
}

?>