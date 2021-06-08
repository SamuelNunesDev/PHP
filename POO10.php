<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO10</title>
</head>
<body>
    <?php
        require_once 'Animais.php';

        $mamifero = new Mamifero(66, 22, 4, 'Preta');
        $cachorro = new Cachorro(25, 10, 2, 'Branco');
        $lobo = new Lobo(70, 15, 6, 'Pardo');

        $cachorro->emitirSom();
        $mamifero->emitirSom();
        $lobo->emitirSom();

        $cachorro->reagirFrase('Olá');
        $cachorro->reagirFrase('Vai Apanhar!');
        $cachorro->reagirHora(11.45);
        $cachorro->reagirHora(21.00);
        $cachorro->reagirDono(true);
        $cachorro->reagirDono(false);
        $cachorro->reagirIdadePeso(2, 12.5);
        $cachorro->reagirIdadePeso(17, 4.5);
    ?>
</body>
</html>