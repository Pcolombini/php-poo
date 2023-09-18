# Aula 02

O  que é um objeto?
    > É uma coisa materia ou abstrata que pode ser percebida pelos sentidos e descrita por meio de suas caracteristicas, comportamento e estado aual

- Classificação
    > Em POO, classificação é uma ***fôrma, molde***, literalmente uma ***classe***

Se levarmos em conta uma "Caneta" como objeto, podemos nos perguntar 3 coisas:

- Coisas que tem? (**ATRIBUTOS**)
    > modelo, cor, ponta, carga, tampada;

- Coisas que faz? (**MÉTODOS**)
    > Escrever, rabiscar, pintar, tampada, destampada;

- Como estou agora? (**ESTADO**)
  > 50% de carga;
   ponta fina;
   é azul;
   está escrevendo;

Para um objeto caneta, segue a representação da sua classe em pseudo-código:

```pseudo-codigo

    classe Caneta
            modelo : caractere
            cor : caractere
            ponta : real
            carga : inteiro
            tampada : logico
        metodo rabiscar()
            se (tampada) entao
                escreva ("erro")
            senao
            escreva ("rabiscando")
            fimse
        fimMetodo
        metodo tampar()
            tampada = verdadeiro
        fimMetodo
    fimClasse 

```

Se quisermos, a partir dessa classe criar um objeto do tipo caneta, fazemos uma instância desse objeto:

```php

    // Instanciando o objeto bic apartir da classe caneta
    $bic = new Caneta();

    // Setamos os atributos

    $bic->cor = "azul";
    $bic->ponta = 0.5;
    $bic->tampada = false;
```

- Abstração

> Dentre todas os atributos, métodos e estados, abstrair é escolher somente os mais importantes para o uso em questão;
