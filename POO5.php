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
        require_once "Lutador.php";
        require_once "Luta.php";
        $lutadores[0] = new Lutador("Pretty Boy", "França", 31, 1.75, 68.9,
                                    11, 3, 1);
        $lutadores[1] = new Lutador("Putscript", "Brasil", 29, 1.68, 57.8, 14,
                                    2, 3);
        $lutadores[2] = new Lutador("Snapshadow", "EUA", 35,1.65, 80.9, 12,
                                    2, 1);
        $lutadores[3] = new Lutador("Dead Code", "Australia", 28, 1.93, 81.6,
                                    13, 0,2);
        $lutadores[4] = new Lutador("UFOCobol", "Brasil", 37, 1.70, 119.3, 5,
                                    4, 3);
        $lutadores[5] = new Lutador("Nerdaaart", "EUA", 30, 1.81, 105.7, 12,
                                    2, 4);
        $lutadores[0]->apresentar();
        $lutadores[1]->status();
        $lutadores[2]->ganharLuta();
        $lutadores[0]->perderLuta();
        $lutadores[1]->empatarLuta();
        $luta[0] = new Luta();
        $luta[0]->marcarLuta($lutadores[5], $lutadores[1]);
        $luta[0]->lutar();
        var_dump($lutadores);
    ?>
</div>
</body>
</html>