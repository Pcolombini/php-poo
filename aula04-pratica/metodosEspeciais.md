# Aula 04

## Métodos especiais

Vamos pensar em um objeto tipo estante;

```php
    // AQUI INSTANCIAMOS O OBJETO A PARTIR DA CLASSE ESTANTE
    $estante = new Estante();
```

- Método acessor (**Getters**)
  - Pega alguma informação;
    > Se tem atributo chamado saldo, o método get pega o saldo;
    getSaldo;
    Usado por convenção;

```php
    $total = $estante->getTotDoc();
    // PEGA O VALOR TOTAL DE DOCUMENTOS NA ESTANTE E ATRIBUE A VARIÁVEL

    echo $total;
    // MOSTRA NA TELA O TOTAL DE ARQUIVOS
```

- Métodos modificador (**Setters**)
  - Modificam coisas que estão no objeto, garante segurança;
  > Se temos que passar um valor no atributo, o método setter "***passa***" esse valor no parâmetro

```PHP
    $estante->setTotDoc($doc);
```

## Vamos para nossa classe caneta

```pseudo-codigo

        classe Caneta

            publico modelo : caractere
            publico cor : caractere
            privado ponta : real
            protegido carga : inteiro
            protegido tampada : logico

        publico metodo getModelo()
            retorne modelo
        fimMetodo

        metodo construtor (modelo : caractere, cor : caractere, ponta : real)

            // MÉTODOS COM PARÂMETROS, SÃO DEFINIDOS NOS PARAMETROS DA CLASSE NA HORA DA INSTÂNCIA
            setModelo(modelo);
            setCor(cor);
            setPonta(ponta);
            tampar();
            
        fimMetodo

        publico metodo setModelo(modelo:caractere)
            this.modelo = modelo;
        fimMetodo

        publico metodo getPonta()
            retorne ponta
        fimMetodo

        publico metodo setPonta(ponta:real)
            this.ponta = ponta;
        fimMetodo

        publico metodo rabiscar()
            se (tampada) entao
                escreva ("erro")
            senao
            escreva ("rabiscando")
            fimse
        fimMetodo

        publico metodo tampar()
            tampada = verdadeiro
        fimMetodo

    fimClasse 
```

- Método construtor (**Construct**)

  - Altomatiza ou pré define a construção dos valores necessários dos atributos;
  > Sempre que instanciar um novo objeto, ele já vem com as definições passadas no método construtor;

```pseudo-codigo
        metodo construtor (modelo : caractere, cor : caractere, ponta : real)

            // MÉTODOS COM PARÂMETROS, SÃO DEFINIDOS NOS PARAMETROS DA CLASSE NA HORA DA INSTÂNCIA
            setModelo(modelo);
            setCor(cor);
            setPonta(ponta);
            tampar();
            
        fimMetodo

        canetaUm = nova Caneta("BIC","Azul",0.5);
```
