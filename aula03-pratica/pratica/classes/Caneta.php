<?php

class Caneta
{
    public $modelo;
    public $cor;
    private $ponta;
    protected $carga;
    protected $tampada;

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
        echo 'Caneta Tampada';
    }

    public function destampar()
    {
        $this->tampada = false;
        echo 'Caneta Destampada';
    }
}
