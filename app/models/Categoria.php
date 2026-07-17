<?php

class Categoria
{
    private $id;
    private $nome;
    private $tipo;
    private $ativo;

    public function __construct(
        string $nome,
        string $tipo
    )
    {
        $this->setNome($nome);
        $this->setTipo($tipo);
        $this->setAtivo(true);
    }

    /* Getters */

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getTipo(): string
    {
        return $this->tipo;
    }

    public function getAtivo(): bool
    {
        return $this->ativo;
    }

    /* Setters */

    public function setId(int $id)
    {
        if ($this->id === null && $id > 0)
        {
            $this->id = $id;
        }
        else
        {
            throw new Exception("ID inválido.");
        }
    }

    public function setNome(string $nome)
    {
        $nome = trim($nome);

        if (empty($nome))
        {
            throw new Exception("Nome da categoria é obrigatório.");
        }

        if (strlen($nome) < 3 || strlen($nome) > 100)
        {
            throw new Exception("Nome da categoria inválido.");
        }

        $this->nome = $nome;
    }

    public function setTipo(string $tipo)
    {
        $tipo = strtolower(trim($tipo));

        $tiposValidos = [
            'produto',
            'galeria'
        ];

        if (!in_array($tipo, $tiposValidos))
        {
            throw new Exception("Tipo de categoria inválido.");
        }

        $this->tipo = $tipo;
    }

    public function setAtivo(bool $ativo)
    {
        $this->ativo = $ativo;
    }
}

?>