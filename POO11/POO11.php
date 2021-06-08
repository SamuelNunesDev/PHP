<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO11</title>
</head>
<body>
    <?php
        require_once 'Video.php';
        require_once 'Gafanhotos.php';
        require_once 'Visualizacao.php';

        $v[0] = new Video("Aula 01 de POO");
        $v[1] = new Video("Aula 15 de PHP");
        $v[2] = new Video("Aula 20 de HTML5");

        $g[0] = new Gafanhoto("Samuel", 22, "M", "Sam");
        $g[1] = new Gafanhoto("Sara", 17, "F", "Sarinha");

        $visulizacao[0] = new Visualizacao($g[0], $v[2]);
        $visulizacao[1] = new Visualizacao($g[0], $v[0]);

        $visulizacao[0]->avaliar();
        $visulizacao[0]->avaliarNota(10);
        $visulizacao[0]->avaliarPorc(100);

        var_dump($v, $g, $visulizacao);
    ?>
</body>
</html>