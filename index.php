<!DOCTYPE html>

<html>
    <head>       
        <meta charset="UTF-8">
        <title>Ultra Emoji Combat</title>
    </head>
    <body><pre>
            <?php
            require_once 'Lutador.php';
            require_once 'Luta.php';
            $l = array();
            $l[0] = new Lutador("Pretty Boy", "França", 30, 1.75, 90.9, 11, 2, 1);
            $l[1] = new Lutador("PutScript", "Brasil", 29, 1.68, 57.5, 14, 2, 3);
            $l[2] = new Lutador("SnapShadow", "Estados Unidos", 35, 16.5, 80.9, 12, 2, 1);
            $l[3] = new Lutador("Dead Code", "Austrália", 28, 19.3, 81.6, 13, 0, 2);
            $l[4] = new Lutador("UFC Cobol", "Brasil", 37, 1.70, 119, 5, 4, 3);
            $l[5] = new Lutador("BerdArt", "Estados Unidos", 30, 1.81, 105.7, 12, 2, 4);
            
           $UEC01 = new Luta();
           $UEC01->marcarLuta($l[1], $l[5]);
           $UEC01->lutar();
           $l[0]->status();
           $l[5]->status();
          
           
            ?>
        </pre>
    </body>
</html>
