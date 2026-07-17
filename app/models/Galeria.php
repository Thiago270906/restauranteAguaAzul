<?php

class Galeria
{
    private $id;
    private $titulo;
    private $imagem;
    private $descricao;
    private $ativo;
    private $criadoEm;
    private $deletedAt;
    private $categoriaId;

    public function __construct(
        string $imagem,
        int $categoriaId,
        ?string $titulo = null,
        ?string $descricao = null
    )
    {
        $this->setTitulo($titulo);
        $this->setImagem($imagem);
        $this->setDescricao($descricao);
        $this->setCategoriaId($categoriaId);
        $this->setAtivo(true);
    }

    /* Getters */

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function getImagem(): string
    {
        return $this->imagem;
    }

    public function getDescricao(): ?string
    {
        return $this->descricao;
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

    public function setTitulo(?string $titulo)
    {
        if ($titulo === null || trim($titulo) === '')
        {
            $this->titulo = null;
            return;
        }

        $titulo = trim($titulo);

        if (strlen($titulo) > 150)
        {
            throw new Exception("Título muito longo.");
        }

        $this->titulo = $titulo;
    }

    public function setImagem(string $imagem)
    {
        $imagem = trim($imagem);

        if (empty($imagem))
        {
            throw new Exception("Imagem obrigatória.");
        }

        if (strlen($imagem) > 255)
        {
            throw new Exception("Caminho da imagem muito longo.");
        }

        $this->imagem = $imagem;
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