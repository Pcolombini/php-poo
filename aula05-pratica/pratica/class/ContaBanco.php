<?php

class ContaBanco
{
    public $numConta;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;


    public function __construct($dono, $tipo, $numero)
    {
        $this->setNumConta($numero);
        $this->setDono($dono);
        $this->saldo = 0.00;
        $this->setTipo($tipo);
        $this->status = false;
        $this->abrirConta();
        $this->pagarMensal();
    }

    public function abrirConta()
    {
        $this->status = true;
        echo "Olá, {$this->getDono()}!<br>";
        echo "Sua conta está aberta.<br>";
    }

    public function fecharConta()
    {
        if ($this->saldo > 0 || $this->saldo > '0') {
            return "Ainda possui saldo, para encerrar, saque!<br>";
        } else if ($this->saldo < 0 || $this->saldo < '0') {
            return "Deposite o valor do saldo devedor!<br>";
        } else {
            $this->status = false;
            return "Conta fechada!<br>";
        }
    }

    public function depositar($valor)
    {
        if ($this->getStatus() == true) {
            $this->saldo += $valor;
            echo "Você depoisitou " .
                number_format($valor, 2) .
                "<br>{$this->getSaldo()}<br>";
        }
    }

    public function sacar($valor)
    {
        if ($this->getStatus() == true) {

            if ($this->getSaldo() >= $valor) {
                $this->saldo -= $valor;
                echo "Você sacou " . number_format($valor, 2) . "!<br>";
                echo "{$this->getSaldo()}<br>";
            } else {
                echo "Saldo insuficiente!<br>";
            }
            
        } else {
            return "Conta fechada";
        }
    }

    public function pagarMensal()
    {
        if ($this->status == true and $this->getTipo() == "cc") {
            $this->saldo -= 12.00;
        } elseif ($this->status == true and $this->getTipo() == "cp") {
            $this->saldo -= 20.00;
        }
    }

    /**
     * @return mixed
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     * @param mixed $tipo 
     * @return self
     */
    public function setTipo($tipo): self
    {
        $this->tipo = $tipo;

        if ($this->tipo == "cc") {
            $this->saldo += 50.00;
        } elseif ($this->tipo == "cp") {
            $this->saldo += 150.00;
        }

        return $this;
    }

    /**
     * @return mixed
     */
    public function getDono()
    {
        return $this->dono;
    }

    /**
     * @param mixed $dono 
     * @return self
     */
    public function setDono($dono): self
    {
        $this->dono = $dono;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSaldo()
    {
        $this->saldo = number_format($this->saldo, 2);
        return "Saldo atual R$ {$this->saldo}<br>";
    }

    /**
     * @param mixed $saldo 
     * @return self
     */
    public function setSaldo($saldo): self
    {
        $this->saldo = $saldo;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        if ($this->status) {
            return "Conta aberta!<br>";
        }
    }

    /**
     * @param mixed $status 
     * @return self
     */
    public function setStatus($status = false): self
    {
        $this->status = false;
        return $this;
    }

    public function setNumConta($numero): self
    {
        $this->numConta = $numero;
        return $this;
    }

    public function getNumConta()
    {
        return $this->numConta;
    }
}
