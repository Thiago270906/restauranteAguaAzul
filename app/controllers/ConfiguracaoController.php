<?php

require_once __DIR__ . '/../helpers/AuthHelper.php';
require_once __DIR__ . '/../repositories/ConfiguracaoRepository.php';
require_once __DIR__ . '/../models/Configuracao.php';

class ConfiguracaoController
{
    private ConfiguracaoRepository $repository;

    public function __construct()
    {
        AuthHelper::requireAdmin();

        $this->repository = new ConfiguracaoRepository();
    }

    public function index()
    {
        $configuracao = $this->repository->buscarConfiguracao();

        require __DIR__ . '/../views/admin/configuracoes/index.php';
    }

    public function atualizar()
    {
    
        try
        {
            $configuracao = new Configuracao(
                $_POST['nome_restaurante'],
                $_POST['whatsapp'],
                $_POST['email'],
                $_POST['instagram'] ?: null,
                $_POST['facebook'] ?: null,
                $_POST['logradouro'],
                $_POST['numero'],
                $_POST['bairro'],
                $_POST['cidade'],
                $_POST['estado'],
                $_POST['cep'],
            );

            // Mantém o mesmo ID do registro existente
            $configuracao->setId(1);

            $this->repository->atualizar($configuracao);

            $_SESSION['sucesso'] = "Configurações atualizadas com sucesso.";

            header("Location: index.php?action=configuracoes");
            exit;
        }
        catch (Exception $e)
        {
            $_SESSION['erro'] = $e->getMessage();

            header("Location: index.php?action=configuracoes");
            exit;
        }
    }
}