<?php

class Configuracao
{
    private ?int $id = null;

    private string $nomeRestaurante;
    private string $whatsapp;
    private string $email;
    private ?string $instagram;
    private ?string $facebook;

    private string $logradouro;
    private string $numero;
    private string $bairro;
    private string $cidade;
    private string $estado;
    private string $cep;

    public function __construct(
        string $nomeRestaurante,
        string $whatsapp,
        string $email,
        ?string $instagram,
        ?string $facebook,
        string $logradouro,
        string $numero,
        string $bairro,
        string $cidade,
        string $estado,
        string $cep,
    )
    {
        $this->setNomeRestaurante($nomeRestaurante);
        $this->setWhatsapp($whatsapp);
        $this->setEmail($email);
        $this->setInstagram($instagram);
        $this->setFacebook($facebook);
        $this->setLogradouro($logradouro);
        $this->setNumero($numero);
        $this->setBairro($bairro);
        $this->setCidade($cidade);
        $this->setEstado($estado);
        $this->setCep($cep);
    }

    /* =======================
        GETTERS
    ======================= */

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomeRestaurante(): string
    {
        return $this->nomeRestaurante;
    }

    public function getWhatsapp(): string
    {
        return $this->whatsapp;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getInstagram(): ?string
    {
        return $this->instagram;
    }

    public function getFacebook(): ?string
    {
        return $this->facebook;
    }

    public function getLogradouro(): string
    {
        return $this->logradouro;
    }

    public function getNumero(): string
    {
        return $this->numero;
    }

    public function getBairro(): string
    {
        return $this->bairro;
    }

    public function getCidade(): string
    {
        return $this->cidade;
    }

    public function getEstado(): string
    {
        return $this->estado;
    }

    public function getCep(): string
    {
        return $this->cep;
    }

    /* =======================
        SETTERS
    ======================= */

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

    public function setNomeRestaurante(string $nome): void
    {
        $nome = trim($nome);

        if (empty($nome))
        {
            throw new Exception("Nome do restaurante é obrigatório.");
        }

        if (strlen($nome) > 150)
        {
            throw new Exception("Nome muito longo.");
        }

        $this->nomeRestaurante = $nome;
    }

    public function setWhatsapp(string $whatsapp): void
    {
        $whatsapp = preg_replace('/[^0-9]/', '', $whatsapp);

        if (strlen($whatsapp) < 10 || strlen($whatsapp) > 11)
        {
            throw new Exception("WhatsApp inválido.");
        }

        $this->whatsapp = $whatsapp;
    }

    public function setEmail(string $email): void
    {
        $email = trim($email);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            throw new Exception("E-mail inválido.");
        }

        $this->email = strtolower($email);
    }

    public function setInstagram(?string $instagram): void
    {
        if (empty($instagram))
        {
            $this->instagram = null;
            return;
        }

        if (!filter_var($instagram, FILTER_VALIDATE_URL))
        {
            throw new Exception("URL do Instagram inválida.");
        }

        $this->instagram = $instagram;
    }

    public function setFacebook(?string $facebook): void
    {
        if (empty($facebook))
        {
            $this->facebook = null;
            return;
        }

        if (!filter_var($facebook, FILTER_VALIDATE_URL))
        {
            throw new Exception("URL do Facebook inválida.");
        }

        $this->facebook = $facebook;
    }

    public function setLogradouro(string $logradouro): void
    {
        $logradouro = trim($logradouro);

        if (empty($logradouro))
        {
            throw new Exception("Logradouro obrigatório.");
        }

        $this->logradouro = $logradouro;
    }

    public function setNumero(string $numero): void
    {
        $numero = trim($numero);

        if (empty($numero))
        {
            throw new Exception("Número obrigatório.");
        }

        $this->numero = $numero;
    }

    public function setBairro(string $bairro): void
    {
        $bairro = trim($bairro);

        if (empty($bairro))
        {
            throw new Exception("Bairro obrigatório.");
        }

        $this->bairro = $bairro;
    }

    public function setCidade(string $cidade): void
    {
        $cidade = trim($cidade);

        if (empty($cidade))
        {
            throw new Exception("Cidade obrigatória.");
        }

        $this->cidade = $cidade;
    }

    public function setEstado(string $estado): void
    {
        $estado = strtoupper(trim($estado));

        if (!preg_match('/^[A-Z]{2}$/', $estado))
        {
            throw new Exception("Estado inválido.");
        }

        $this->estado = $estado;
    }

    public function setCep(string $cep): void
    {
        $cep = preg_replace('/[^0-9]/', '', $cep);

        if (strlen($cep) != 8)
        {
            throw new Exception("CEP inválido.");
        }

        $this->cep = $cep;
    }
}