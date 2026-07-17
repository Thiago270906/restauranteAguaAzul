<?php

class HorarioFuncionamento
{
    private ?int $id = null;
    private int $diaSemana;
    private string $openAt;
    private string $closeAt;
    private bool $ativo;

    public function __construct(
        int $diaSemana,
        string $openAt,
        string $closeAt,
        bool $ativo = true
    )
    {
        $this->setDiaSemana($diaSemana);
        $this->setOpenAt($openAt);
        $this->setCloseAt($closeAt);
        $this->setAtivo($ativo);
    }

    /* ==========================
        GETTERS
    ========================== */

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDiaSemana(): int
    {
        return $this->diaSemana;
    }

    public function getOpenAt(): string
    {
        return $this->openAt;
    }

    public function getCloseAt(): string
    {
        return $this->closeAt;
    }

    public function getAtivo(): bool
    {
        return $this->ativo;
    }

    /* ==========================
        SETTERS
    ========================== */

    public function setId(int $id): void
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

    public function setDiaSemana(int $dia): void
    {
        if ($dia < 0 || $dia > 6)
        {
            throw new Exception("Dia da semana inválido.");
        }

        $this->diaSemana = $dia;
    }

    public function setOpenAt(string $hora): void
    {
        if (!$this->validarHora($hora))
        {
            throw new Exception("Horário de abertura inválido.");
        }

        $this->openAt = $hora;
    }

    public function setCloseAt(string $hora): void
    {
        if (!$this->validarHora($hora))
        {
            throw new Exception("Horário de fechamento inválido.");
        }

        $this->closeAt = $hora;
    }

    public function setAtivo(bool $ativo): void
    {
        $this->ativo = $ativo;
    }

    /* ==========================
        MÉTODOS AUXILIARES
    ========================== */

    private function validarHora(string $hora): bool
    {
        return preg_match('/^([01]\d|2[0-3]):([0-5]\d)(:[0-5]\d)?$/', $hora);
    }

    public function getNomeDia(): string
    {
        $dias = [
            "Domingo",
            "Segunda-feira",
            "Terça-feira",
            "Quarta-feira",
            "Quinta-feira",
            "Sexta-feira",
            "Sábado"
        ];

        return $dias[$this->diaSemana];
    }
}