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
    $canetaUm->tampada = false;
    $canetaUm->tampar();
    $canetaUm->destampar();
    $canetaUm->rabiscar();
    ?>
    <?php
    $canetaDois->destampar();
    $canetaDois->tampar();
    $canetaDois->destampar();
    $canetaDois->rabiscar();
    ?>
    <pre>
        <?php
        print_r($canetaUm);
        print_r($canetaDois);
        ?>
    </pre>
</body>

</html>