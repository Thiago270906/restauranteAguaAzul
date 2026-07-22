<?php

require_once __DIR__ . '/../helpers/AuthHelper.php';
require_once __DIR__ . '/../services/ConfiguracaoService.php';

class ConfiguracaoController
{
    private ConfiguracaoService $service;

    public function __construct()
    {
        AuthHelper::requireAdmin();

        $this->service = new ConfiguracaoService();
    }

    /* =====================================================
        CONFIGURAÇÕES
    ===================================================== */

    public function index(): void
    {
        $configuracao = $this->service->buscarConfiguracao();
        $horarios = $this->service->listarHorarios();

        require __DIR__ . '/../views/admin/configuracoes/index.php';
    }

    public function atualizar(): void
    {
        try
        {
            $this->service->atualizarConfiguracao($_POST);

            $_SESSION['sucesso'] = "Configurações atualizadas com sucesso.";
        }
        catch (Exception $e)
        {
            $_SESSION['erro'] = $e->getMessage();
        }

        $this->redirecionar();
    }

    /* =====================================================
        HORÁRIOS DE FUNCIONAMENTO
    ===================================================== */

    public function cadastrarHorario(): void
    {
        try
        {
            $this->service->cadastrarHorario($_POST);

            $_SESSION['sucesso'] = "Horário cadastrado com sucesso.";
        }
        catch (Exception $e)
        {
            $_SESSION['erro'] = $e->getMessage();
        }

        $this->redirecionar();
    }

    public function editarHorario(): void
    {
        try
        {
            $this->service->atualizarHorario(
                (int) $_POST['id'],
                $_POST
            );

            $_SESSION['sucesso'] = "Horário atualizado com sucesso.";
        }
        catch (Exception $e)
        {
            $_SESSION['erro'] = $e->getMessage();
        }

        $this->redirecionar();
    }

    public function excluirHorario(): void
    {
        try
        {
            $id = isset($_POST['id'])
                ? (int) $_POST['id']
                : (int) $_GET['id'];

            $this->service->excluirHorario($id);

            $_SESSION['sucesso'] = "Horário removido com sucesso.";
        }
        catch (Exception $e)
        {
            $_SESSION['erro'] = $e->getMessage();
        }

        $this->redirecionar();
    }

    /* =====================================================
        AUXILIAR
    ===================================================== */

    private function redirecionar(): void
    {
        header("Location: index.php?action=configuracoes");
        exit;
    }
}