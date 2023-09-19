<?php

class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

    public function __construct($mod, $cor, $pon,$car)
    {
        $this->setModelo($mod);
        $this->cor = $cor;
        $this->setPonta($pon);
        $this->carga = $car;
        $this->tampar();
    }
    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    public function getPonta()
    {
        return $this->ponta;
    }

    public function setPonta($ponta)
    {
        $this->ponta = $ponta;
    }

    public function rabiscar()
    {
        if ($this->tampada == true) {
            echo "<strong>Primeiro destampe a caneta.<br></strong>";
        } else {
            echo "Estou <b>RABISCANDO</b>...<br>";
        }
    }

    public function tampar()
    {
        $this->tampada = true;
        echo 'Caneta Tampada<br>';
    }

    public function destampar()
    {
        $this->tampada = false;
        echo 'Caneta Destampada<br>';
    }

	/**
	 * @return mixed
	 */
	public function getTampada() {
		return $this->tampada;
	}
	
	/**
	 * @param mixed $tampada 
	 * @return self
	 */
	public function setTampada($tampada): self {
		$this->tampada = $tampada;
		return $this;
	}
}
