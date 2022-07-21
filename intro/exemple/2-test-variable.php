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
    //TESTER DES VARIABLES
    $chaine = "Salut, je suis en cours";

    if(isset($chaine)){
       echo "{$chaine} : existe<hr>";
    } else {
        echo "{$chaine} : n'existe pas<hr>";
    }


    if(is_null($chaine)){
        echo "{$chaine} : est null<hr>";
    } else {
        echo "{$chaine} : n'est pas null<hr>";
    }


    if(is_bool($chaine)){
        echo "{$chaine} : est boolean<hr>";
    } else {
        echo "{$chaine} : n'est pas boolean<hr>";
    }

    if(is_string($chaine)){
        echo "{$chaine} : est une chaine<hr>";
    } else {
        echo "{$chaine} : n'est pas une chaine<hr>";
    }


    if(is_int($chaine)){
        echo "{$chaine} : est un entier<hr>";
    } else {
        echo "{$chaine} : n'est pas un entier<hr>";
    }

    if(is_float($chaine)){
        echo "{$chaine} : est un décimal<hr>";
    } else {
        echo "{$chaine} : n'est pas un décimal<hr>";
    }

    if(is_array($chaine)){
        echo "{$chaine} : est un tableau<hr>";
    } else {
        echo "{$chaine} : n'est pas un tableau<hr>";
    }


    if(is_object($chaine)){
        echo "{$chaine} : est un objet<hr>";
    } else {
        echo "{$chaine} : n'est pas un objet<hr>";
    }

    if(empty($chaine)){
        echo "{$chaine} : est vide<hr>";
    } else {
        echo "{$chaine} : n'est pas vide<hr>";
    }

    ?>
</body>
</html>