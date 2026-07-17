<?php

class Cardapio
{
    private $id;
    private $nome;
    private $descricao;
    private $preco;
    private $imagem;
    private $ativo;
    private $criadoEm;
    private $deletedAt;
    private $categoriaId;

    public function __construct(
        string $nome,
        float $preco,
        int $categoriaId,
        ?string $descricao = null,
        ?string $imagem = null
    )
    {
        $this->setNome($nome);
        $this->setPreco($preco);
        $this->setDescricao($descricao);
        $this->setImagem($imagem);
        $this->setCategoriaId($categoriaId);
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

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function getImagem(): ?string
    {
        return $this->imagem;
    }

    public function getAtivo(): bool
    {
        return $this->ativo;
    }

    public function getCriadoEm(): ?string
    {
        return $this->criadoEm;
    }

    public function getDeletedAt(): ?string
    {
        return $this->deletedAt;
    }

    public function getCategoriaId(): int
    {
        return $this->categoriaId;
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
            throw new Exception("Nome obrigatório.");
        }

        if (strlen($nome) > 150)
        {
            throw new Exception("Nome muito longo.");
        }

        $this->nome = $nome;
    }

    public function setDescricao(?string $descricao)
    {
        if ($descricao === null || trim($descricao) === '')
        {
            $this->descricao = null;
            return;
        }

        $this->descricao = trim($descricao);
    }

    public function setPreco(float $preco)
    {
        if ($preco <= 0)
        {
            throw new Exception("Preço inválido.");
        }

        $this->preco = round($preco, 2);
    }

    public function setImagem(?string $imagem)
    {
        if ($imagem === null || trim($imagem) === '')
        {
            $this->imagem = null;
            return;
        }

        if (strlen($imagem) > 255)
        {
            throw new Exception("Caminho da imagem muito longo.");
        }

        $this->imagem = trim($imagem);
    }

    public function setAtivo(bool $ativo)
    {
        $this->ativo = $ativo;
    }

    public function setCriadoEm(string $criadoEm)
    {
        $this->criadoEm = $criadoEm;
    }

    public function setDeletedAt(?string $deletedAt)
    {
        $this->deletedAt = $deletedAt;
    }

    public function setCategoriaId(int $categoriaId)
    {
        if ($categoriaId <= 0)
        {
            throw new Exception("Categoria inválida.");
        }

        $this->categoriaId = $categoriaId;
    }
}

?>