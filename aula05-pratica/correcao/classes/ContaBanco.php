<?php
class ContaBanco
{
    public $numCont;
    protected $tipo;
    private $dono;
    private $saldo;
    private $status;

    public function __construct()
    {
        $this->setSaldo(0.00);
        $this->setStatus(false);
        echo "<p>Conta criada com sucesso!</p>";
    }

    public function abrirConta($tipo)
    {
        $this->setTipo($tipo);
        $this->setStatus(true);
        if ($tipo == "cc") {
            $this->setSaldo(50.00);
        } elseif ($tipo == "cp") {
            $this->setSaldo(150.00);
        }
    }

    public function fecharConta()
    {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta possui <b>Saldo</b><br>Para encerrar saque!</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Conta em débito, deposite o valor devedor!</p>";
        } else {
            echo "<p>Conta encerrada!</p>";
            $this->setStatus(false);
        }
    }

    public function depositar($valor)
    {
        $valor = number_format($valor,2);
        if ($this->getStatus() == true) {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Depósito de R$ {$valor} na conta de {$this->getDono()} </p>";
        } else {
            echo "<p>Conta inativa, abra a conta primeiro!</p>";
        }
    }

    public function sacar($valor)
    {
        $valor = number_format($valor,2);

        if ($this->getStatus()) {
            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Saque de R$ {$valor} na conta de {$this->getDono()} </p>";
            } else {
                echo "<p>Saldo insuficiente!</p>";
            }
        } else {
            echo "<p>Conta inativa, abra a conta primeiro!</p>";
        }
    }

    public function pagarMensal()
    {
       
        // if ($this->getTipo() == "cc") {
        //     $valor = 12.00;
        //     number_format($valor,2);
        // } elseif ($this->getTipo() == "cp") {
        //     $valor = 20.00;
        //     number_format($valor,2);
        // }
        // if ($this->getStatus()) {
        //     number_format($valor,2);
        //     $this->setSaldo($this->getSaldo() - $valor);
        //     echo "<p>Débito de R$ {$valor} referente a mensalidade na conta de {$this->getDono()} </p>";
        // } else {
        //     echo "<p>Problemas com a conta, Não é possível pagar a mensal!</p>";
        // }
         

        if ($this->getStatus()) {
            if ($this->getTipo() == "cc" && $this->getSaldo() > 0) {
                $valor = 12.00;

                $this->setSaldo($this->getSaldo() - $valor);

                echo "<p>Débito de R$ {$valor} referente a mensalidade na conta de {$this->getDono()} </p>";
            } elseif ($this->getTipo() == "cp" && $this->getSaldo() > 0) {
                $valor = 20.00;

                $this->setSaldo($this->getSaldo() - $valor);

                echo "<p>Débito de R$ {$valor} referente a mensalidade na conta de {$this->getDono()} </p>";
            } else {
                echo "<p>Saldo insuficiente</p>";
            }
        } else {
            echo "<p>Conta inativa, abra a conta primeiro!</p>";
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
        return $this->saldo;
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
        return $this->status;
    }

    /**
     * @param mixed $status 
     * @return self
     */
    public function setStatus($status): self
    {
        $this->status = $status;
        return $this;
    }
    
    public function setNumConta($numConta)
    {
        $this->numCont = $numConta;
        return $this;
    } 

    public function getNumConta()
    {
        return $this->numCont;
    }
}
