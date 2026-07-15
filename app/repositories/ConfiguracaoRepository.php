<?php

require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../models/Configuracao.php';

class ConfiguracaoRepository
{
    private PDO $conn;

    public function __construct()
    {
        $db = Database::getInstance();
        $this->conn = $db->getConnection();
    }

    public function buscarConfiguracao(): ?Configuracao
    {
        $stmt = $this->conn->prepare("
            SELECT *
            FROM configuracoes
            WHERE id = 1
            LIMIT 1
        ");

        $stmt->execute();

        $dados = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$dados)
        {
            return null;
        }

        $configuracao = new Configuracao(
            $dados['nome_restaurante'],
            $dados['whatsapp'],
            $dados['email'],
            $dados['instagram'],
            $dados['facebook'],
            $dados['logradouro'],
            $dados['numero'],
            $dados['bairro'],
            $dados['cidade'],
            $dados['estado'],
            $dados['cep']
        );

        $configuracao->setId($dados['id']);

        return $configuracao;
    }

    public function atualizar(Configuracao $configuracao): bool
    {
        $stmt = $this->conn->prepare("
            UPDATE configuracoes
            SET
                nome_restaurante = ?,
                whatsapp = ?,
                email = ?,
                instagram = ?,
                facebook = ?,
                logradouro = ?,
                numero = ?,
                bairro = ?,
                cidade = ?,
                estado = ?,
                cep = ?
            WHERE id = ?
        ");

        return $stmt->execute([
            $configuracao->getNomeRestaurante(),
            $configuracao->getWhatsapp(),
            $configuracao->getEmail(),
            $configuracao->getInstagram(),
            $configuracao->getFacebook(),
            $configuracao->getLogradouro(),
            $configuracao->getNumero(),
            $configuracao->getBairro(),
            $configuracao->getCidade(),
            $configuracao->getEstado(),
            $configuracao->getCep(),
            $configuracao->getId()
        ]);
    }
}