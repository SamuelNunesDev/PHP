<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" ref=""/>
    <title>POO</title>
<head/>
<body>
<div>
    <?php
        require_once "ControleRemoto.php";
        $c1 = new ControleRemoto;
        $c1->ligar();
        $c1->maisVolume();
        $c1->abrirMenu();
        var_dump($c1);
    ?>
</div>
</body>
</html>