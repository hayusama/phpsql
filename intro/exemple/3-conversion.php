<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo intval(42); //42
        echo "<br>";
        echo intval(4.2); //4
        echo "<br>";
        echo intval("42"); //42
        echo "<br>";
        echo intval("+42"); //42
        echo "<br>";
        echo intval("-42"); //-42
        echo "<br>";
        echo intval(042); //34 car quand entier preceder par 0 transformation en base 8
        echo "<br>";
        echo intval("042"); //42
        echo "<br>";
        echo intval(1e10); //10000000000
        echo "<br>";
        echo intval('1e10'); //10000000000
        echo "<br>";
        echo intval(0x1A); //26  //BASE HEXA(16)
        echo "<br>";
        echo intval(42000000); //42000000
        echo "<br>";
        echo intval(42000000000000000000000000000000000000000000); // 0 TROP DE MEMOIRE
        echo "<br>";
        echo intval("42000000000000000000000000000000000000000000"); //DONNE LE MAX POUR LUI
        echo "<br>";
        echo intval(45,8); //45 car deja une valeur numerique
        echo "<br>";
        echo intval("42",8); //34 car chaine de caractere
        echo "<br>";
        echo intval(array()); //0 tableau vide
        echo "<br>";
        echo intval(array("foo","bar")); //1 car non vide


        //TECHNIQUE D'AFFICHAGE DE PRIX SUR SITE E-COMMERCE.
        $test = 3;
        var_dump($test)."<br>";
        $test = (float)$test;
        var_dump($test);
        echo number_format($test,2,","," ")." €";


    ?>
</body>
</html>