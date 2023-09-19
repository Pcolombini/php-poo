<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Bancária</title>
    <?php
    include 'class/ContaBanco.php';
    include 'clientes/clientes.php';
    ?>
</head>

<body>

    <header>
        <h1>
            Olá, vamos abrir sua conta?
        </h1>
    </header>

    <article>

        <section>

            <?php
                $cc = new ContaBanco("Jubileu","cp",5841);
      
                echo $cc -> getSaldo();
                $cc->sacar(150.00);
            ?>

        </section>

    </article>



</body>

</html>