<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>CECI EST LA DATE</h1>
    <!--  commentaire HTML -->
    <p>
        Bonjour nous sommes le  : 
    <?php
    /*
    *  ceci est mon commentaire
    *  multi-lignes
    */
            echo date("d/m/y");

    //COMMENTAIRE UNE SEULE LIGNE PHP
        ?>
    </p>

    <p>
    <?=date("d/m/y")?>
    </p>
</body>
</html>