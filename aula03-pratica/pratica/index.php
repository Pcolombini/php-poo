<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Objetos Caneta</title>
</head>

<body>
    <?php
    include_once 'classes/Caneta.php';
    include 'objetos/canetaUm.php';
    include 'objetos/canetaDois.php';
    ?>
    <?php
    $canetaUm->modelo = "Bic cristal";
    $canetaUm->cor = "Azul";
    // $canetaUm->ponta = 0.5;
    // $canetaUm->carga = 99;
    // $canetaUm->tampada = true;
    ?>
    <pre>
        <?php
        print_r($canetaUm);
        ?>
    </pre>
    <?php
    $canetaUm->rabiscar();
    $canetaUm->tampar();
    ?>
</body>

</html>