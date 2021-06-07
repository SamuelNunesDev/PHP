<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO 8</title>
</head>
<body>
    <?php

        require_once 'Visitante.php';
        require_once 'Aluno.php';

        $v1 = new Visitante('Samuel', 22, 'M');
        $a1 = new Aluno('Saulo', 17, 'M', 2, 'Ensino Médio');
        var_dump($v1, $a1);
    ?>    
</body>
</html>