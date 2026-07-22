<?php

require_once __DIR__ . '/../repositories/ConfiguracaoRepository.php';
require_once __DIR__ . '/../models/Configuracao.php';
require_once __DIR__ . '/../models/HorarioFuncionamento.php';

class ConfiguracaoService
{
    private ConfiguracaoRepository $repository;

    public function __construct()
    {
        $this->repository = new ConfiguracaoRepository();
    }

    /* =====================================================
        CONFIGURAÇÕES
    ===================================================== */

    public function buscarConfiguracao(): ?Configuracao
    {
        return $this->repository->buscarConfiguracao();
    }

    public function atualizarConfiguracao(array $dados): void
    {
        $configuracao = new Configuracao(
            $dados['nome_restaurante'],
            $dados['whatsapp'],
            $dados['email'],
            $dados['instagram'] ?: null,
            $dados['facebook'] ?: null,
            $dados['logradouro'],
            $dados['numero'],
            $dados['bairro'],
            $dados['cidade'],
            $dados['estado'],
            $dados['cep']
        );

        // Existe somente um registro de configuração.
        $configuracao->setId(1);

        $this->repository->updateConfiguracao($configuracao);
    }

    /* =====================================================
        HORÁRIOS
    ===================================================== */

    public function listarHorarios(): array
    {
        return $this->repository->listarHorarios();
    }

    public function buscarHorario(int $id): ?HorarioFuncionamento
    {
        return $this->repository->buscarHorario($id);
    }

    public function cadastrarHorario(array $dados): void
    {
        $horario = new HorarioFuncionamento(
            (int)$dados['dia_semana'],
            $dados['open_at'],
            $dados['close_at'],
            isset($dados['ativo']) ? (bool)$dados['ativo'] : true
        );

        $this->repository->insertHorario($horario);
    }

    public function atualizarHorario(int $id, array $dados): void
    {
        $horario = new HorarioFuncionamento(
            (int)$dados['dia_semana'],
            $dados['open_at'],
            $dados['close_at'],
            isset($dados['ativo']) ? (bool)$dados['ativo'] : true
        );

        $horario->setId($id);

        $this->repository->updateConfiguracao($horario);
    }

    public function excluirHorario(int $id): void
    {
        $this->repository->excluirHorario($id);
    }
}