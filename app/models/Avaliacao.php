<?php

class Avaliacao
{
    private $id;
    private $nota;
    private $comentario;
    private $aprovado;
    private $criadoEm;
    private $usuarioId;

    public function __construct(
        int $nota,
        string $comentario,
        int $usuarioId
    )
    {
        $this->setNota($nota);
        $this->setComentario($comentario);
        $this->setUsuarioId($usuarioId);
        $this->setAprovado(false);
    }

    /* Getters */

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNota(): int
    {
        return $this->nota;
    }

    public function getComentario(): string
    {
        return $this->comentario;
    }

    public function getAprovado(): bool
    {
        return $this->aprovado;
    }

    public function getCriadoEm(): ?string
    {
        return $this->criadoEm;
    }

    public function getUsuarioId(): int
    {
        return $this->usuarioId;
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

    public function setNota(int $nota)
    {
        if ($nota < 1 || $nota > 5)
        {
            throw new Exception("A nota deve estar entre 1 e 5.");
        }

        $this->nota = $nota;
    }

    public function setComentario(string $comentario)
    {
        $comentario = trim($comentario);

        if (empty($comentario))
        {
            throw new Exception("Comentário obrigatório.");
        }

        if (strlen($comentario) < 5)
        {
            throw new Exception("O comentário deve possuir pelo menos 5 caracteres.");
        }

        $this->comentario = $comentario;
    }

    public function setAprovado(bool $aprovado)
    {
        $this->aprovado = $aprovado;
    }

    public function setCriadoEm(string $criadoEm)
    {
        $this->criadoEm = $criadoEm;
    }

    public function setUsuarioId(int $usuarioId)
    {
        if ($usuarioId <= 0)
        {
            throw new Exception("Usuário inválido.");
        }

        $this->usuarioId = $usuarioId;
    }
}

?>