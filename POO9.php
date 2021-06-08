<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO9</title>
</head>
<body>
    <?php
        require_once 'Mamifero.php';
        require_once 'Reptil.php';
        require_once 'Peixe.php';
        require_once 'Ave.php';
        require_once 'Canguru.php';
        require_once 'Tartaruga.php';
        require_once 'Cachorro.php';

        $mamifero = new Mamifero(66.5, 22, 4, 'Preta');
        $ave = new Ave(5, 2, 2, 'Amarela');
        $reptil = new Reptil(120, 15, 3, 'Verde');
        $canguru = new Canguru(86, 12, 6, "Pardo");
        $tartaruga = new Tartaruga(50, 150, 1, "Verde");
        $cachorro = new Cachorro(35, 5, 6, "Branco");

        $ave->locomover();
        $mamifero->locomover();
        $reptil->locomover();
        $canguru->locomover();
        $tartaruga->locomover();

        $ave->emitirSom();
        $mamifero->emitirSom();
        $cachorro->emitirSom();

        var_dump($mamifero, $ave, $reptil, $canguru, $cachorro, $tartaruga);
    ?>
</body>
</html>