<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href=""/>
    <title>POO</title>
    <head/>
<body>
<div>
    <?php
        require_once 'Aluno.php';
        require_once 'Funcionarios.php';
        require_once 'Professor.php';
        require_once 'Funcionario.php';

        $p1 = new Funcionario('Samuel', 22, 'M');
        $p2 = new Aluno('Sara', 24, 'F', 1, 'ADS');
        $p3 = new Professor('Saulo', '17', 'M', 'Redes', 5000);
        $p4 = new Funcionarios('Eli', 43, 'F', 'TI', false);

        var_dump($p1, $p2, $p3, $p4);

    ?>
</div>
</body>
</html>