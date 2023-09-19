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
    include 'objetos/caneta.php';


    ?>

    <pre>
        <?php 
            print_r($caneta) ;
            $caneta->destampar();
            $caneta->rabiscar();
            $caneta->getTampada();
        ?>
    </pre>

</body>

</html>