<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8"/>
    <link href="POO1.php" rel="stylesheet"/>
    <title>POO 1</title>
</head>
<body>
<div>
    <?php

        require_once "Caneta.php";

        $c1 = new Caneta();
        $c1->cor = "Azul";
        $c1->carga = 90;
        $c1->marca = "Bic";
        $c1->modelo = 0.5;
        $c1->tampada = false;
        $c1->tampar();
        $c1->rabiscar();
    ?>
</div>
</body>
</html>
