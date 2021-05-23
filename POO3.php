<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" ref=""/>
    <title>POO 3</title>
<head/>
<body>
<div>
    <?php
        require_once "ContaBancaria.php";
        $jubileu = new ContaBancaria();
        $creuza = new  ContaBancaria();
        $jubileu->abrirConta("Jubileu", "cc");
        $creuza->abrirConta("Creuza", "cp");
        $jubileu->depositar(300);
        $creuza->depositar(500);
        $jubileu->getsaldo();
        $creuza->getsaldo();
        $creuza->sacar(1000);
        $jubileu->pagarMensal();
        $creuza->pagarMensal();
        $jubileu->getsaldo();
        $creuza->getsaldo();
        $creuza->sacar(630);
        $jubileu->sacar(338);
        $jubileu->fecharConta();
        $creuza->fecharConta();
    ?>
</div>
</body>
</html>