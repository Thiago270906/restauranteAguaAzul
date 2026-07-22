<?php

require_once __DIR__ . '/../../config/Database.php';
require_once __DIR__ . '/../models/Configuracao.php';
require_once __DIR__ . '/../models/HorarioFuncionamento.php';

class ConfiguracaoRepository
{
    private $conn;

    public function __construct()
    {
        $db = Database::getInstance();

        $this->conn = $db->getConnection();
    }

    /* =====================================================
        CONFIGURAÇÕES
    ===================================================== */

    public function buscarConfiguracao()
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

    public function updateConfiguracao($configuracao): bool
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
            WHERE id = 1
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
            $configuracao->getCep()
        ]);
    }

    /* =====================================================
        HORÁRIOS DE FUNCIONAMENTO
    ===================================================== */

    public function listarHorarios(): array
    {
        $stmt = $this->conn->prepare("
            SELECT *
            FROM horarios_funcionamento
            ORDER BY dia_semana, open_at
        ");

        $stmt->execute();

        $horarios = [];

        while ($dados = $stmt->fetch(PDO::FETCH_ASSOC))
        {
            $horario = new HorarioFuncionamento(
                (int)$dados['dia_semana'],
                $dados['open_at'],
                $dados['close_at'],
                (bool)$dados['ativo']
            );

            $horario->setId((int)$dados['id']);

            $horarios[] = $horario;
        }

        return $horarios;
    }

    public function buscarHorario(int $id)
    {
        $stmt = $this->conn->prepare("
            SELECT *
            FROM horarios_funcionamento
            WHERE id = ?
            LIMIT 1
        ");

        $stmt->execute([$id]);

        $dados = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$dados)
        {
            return null;
        }

        $horario = new HorarioFuncionamento(
            (int)$dados['dia_semana'],
            $dados['open_at'],
            $dados['close_at'],
            (bool)$dados['ativo']
        );

        $horario->setId((int)$dados['id']);

        return $horario;
    }

    public function insertHorario($horario): bool
    {
        $stmt = $this->conn->prepare("
            INSERT INTO horarios_funcionamento
            (
                dia_semana,
                open_at,
                close_at,
                ativo
            )
            VALUES
            (?, ?, ?, ?)
        ");

        return $stmt->execute([
            $horario->getDiaSemana(),
            $horario->getOpenAt(),
            $horario->getCloseAt(),
            $horario->getAtivo()
        ]);
    }

    public function updateHorario($horario): bool
    {
        $stmt = $this->conn->prepare("
            UPDATE horarios_funcionamento
            SET
                dia_semana = ?,
                open_at = ?,
                close_at = ?,
                ativo = ?
            WHERE id = ?
        ");

        return $stmt->execute([
            $horario->getDiaSemana(),
            $horario->getOpenAt(),
            $horario->getCloseAt(),
            $horario->getAtivo(),
            $horario->getId()
        ]);
    }

    public function excluirHorario(int $id): bool
    {
        $stmt = $this->conn->prepare("
            DELETE FROM horarios_funcionamento
            WHERE id = ?
        ");

        return $stmt->execute([$id]);
    }
}