<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Correção com o Guana</title>
    <?php require "./classes/ContaBanco.php" ?>
    <style>
        p,pre{
            font-weight: bold;
            font-size: 13pt;
        }
    </style>
</head>
<body>
    <?php 
        $cCreusa = new ContaBanco();
        $cJubileu = new ContaBanco();

        $cCreusa->abrirConta("cp");
        $cCreusa->setDono("Creusa");
        $cCreusa->setNumConta(25145);
        $cCreusa->depositar(500.00);
        $cCreusa->sacar(100.00);
        $cCreusa->pagarMensal();
        $cCreusa->fecharConta();
        echo $cCreusa->getSaldo();
        $cCreusa->sacar(530.00);
        $cCreusa->fecharConta();

        $cJubileu->abrirConta("cc");
        $cJubileu->setDono("Jubileu");
        $cJubileu->setNumConta(54128);
        $cJubileu->depositar(300);
        $cJubileu->pagarMensal();
        $cJubileu->sacar(500);
        $cJubileu->fecharConta();
        echo $cJubileu->getSaldo();
        $cJubileu->sacar(338.00);
        $cJubileu->fecharConta();
    ?>
    <p>
        <pre>
            <?php 
                print_r($cCreusa);
                print_r($cJubileu);
            ?>
        </pre>
    </p>
</body>
</html>