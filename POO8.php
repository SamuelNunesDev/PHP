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
        require_once 'Alunos.php';
        require_once 'Bolsista.php';

        $v1 = new Visitante('Samuel', 22, 'M');
        $a1 = new Aluno('Saulo', 17, 'M', 2, 'Ensino Médio');
        $b1 = new Bolsista('Sara', 20, 'F', 3, 'Sistemas da Informação', 12);
        var_dump($v1, $a1, $b1);
    ?>    
</body>
</html>