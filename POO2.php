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
        require_once "Caneta.php";
        $c = new Caneta();
        $c->set("modelo", "Bic");
        $c->set("carga", "50");
        $c->set("cor", "azul");
        echo "{$c->get("modelo")}<br/>";
        var_dump($c);
    ?>
</div>
</body>
</html>