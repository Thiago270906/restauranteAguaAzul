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
            $dados['senha'],
            $dados['cargo'],
            $dados['telefone']
        );

        $usuario->setId($dados['id']);

        return $usuario;
    }
public function cadastrar(Usuario $usuario): bool
{
    $stmt = $this->conn->prepare("
        INSERT INTO usuarios
        (
            nome,
            email,
            senha,
            cargo,
            telefone
        )
        VALUES
        (
            ?, ?, ?, ?, ?
        )
    ");

    $resultado = $stmt->execute([
        $usuario->getNome(),
        $usuario->getEmail(),
        $usuario->getSenha(),
        $usuario->getCargo(),
        $usuario->getTelefone()
    ]);

    if(!$resultado)
    {
        var_dump($stmt->errorInfo());
        die();
    }

    return true;
}
}

?>