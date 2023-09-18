<?php

class Caneta
{
    public $modelo;
    public $cor;
    public $ponta;
    public $carga;
    public $tampada;

    function rabiscar()
    {
        if ($this->tampada == true) {
            echo "<strong>Primeiro destampe a caneta.<br></strong>";
        } else {
            echo "Estou <b>RABISCANDO</b>...<br>";
        }
    }

    function tampar()
    {
        $this->tampada = true;
    }

    function destampar()
    {
        $this->tampada = false;
    }
}
