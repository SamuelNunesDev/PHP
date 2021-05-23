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
        require_once "Pessoa.php";
        require_once "Livro.php";

        $p[0] = new Pessoa("Samuel", 22, "M");
        $p[1] = new Pessoa("Polly", 19, "F");

        $l[0] = new Livro("Brida", "Paulo Coelho", 250, $p[0]);
        $l[1] = new Livro("Orgulho e Preconceito", "Unknow", 1500, $p[1]);

        $l[0]->detalhes();
        $l[0]->abrir();
        $l[0]->avancarPag();
        $l[0]->folhear(50);
        $l[0]->fechar();

        var_dump($p);
        var_dump($l);
    ?>
</div>
</body>
</html>