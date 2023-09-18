# Aula 03

## Visibilidade

Linguagem de modelagem unificada **UML**

- Diagrama de classe

> Na hora de criar um molde, temos representação visual;
Toda classe é um retângulo;
Geralmente em **negrito** e a primeria letra em maiúscula (***C***aneta);
Depois separamos em duas partes, no cabeçalho vai o nome, no corpo vão as caracteristicas e **atributos**, na parte de baixo vão os **métodos**, sempre com o parênteses () ;

## Modificadores de visibilidade

> Visibilidade indica o nível de acesso aos **componentes** (atributos e métodos) internos de uma classe;

São 3 modificadores:

- public
- pivate
- protected

### Simbolos para identificar os modificadores pela UML

- o sinal de + (pública)
  - Orelhão (Todos)
    > Classe atual e todas as outras classes;
- o sinal de - (privada)
  - Celular (Só eu)
    > Somente a classe atual tem acesso
- o sinal de # (protegido)
  - Telefone residêncial (Só família)
    > A classe atual e a todas as suas sub-classes;

```php

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
    }

    public function destampar()
    {
        $this->tampada = false;
    }
}

```

Para modificar os valores em atributos e métodos privados, usamos métodos **acessores** os **Getters e os Setters**
