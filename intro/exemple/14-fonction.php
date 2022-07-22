<?php


echo "<hr><h2>PROTOTYPE FONCTION ET APPEL</h2>";
//DEFINITIATION DE LA FONCTION/PROCEDURE
//PROTOTYPE
function hello($name){
    echo "Bonjour à toi : $name <br>";
}

//APPEL DE LA FONCTION
hello("Julien");
hello("Sofiane");
hello("Sabrine");

//DEFINITION DE LA FONCTION OU PROTOTYPAGE
function affichage($age, $name, $heure="16h",string $passion="jeux") {
    echo "Bonjour, ".$name;
    echo "<br>";
    echo "Tu as : ".$age." ans";
    echo "<br>";
    echo "Il est : ".$heure;
    echo ", PASSION : ".$passion;
    echo "<hr>";
}

affichage(15,"anthony");
affichage(15,"anthony","17h");
affichage(15,"anthony","17h","foot");
affichage(15,"anthony","16h","foot");


echo "<hr><h2>MULTIPLICATION</h2>";
//DEUX ARGUMENTS DONNE = MULTIPLICATION
function multiplication($a,$b){
    return $a*$b;
}
$result = multiplication(14,15);
echo $result;

echo "<hr><h2>COMPTEUR DE LETTRE</h2>";
//PERMET DE COMPTER LE NOMBRE TOTAL DE LETTRE D'UN MOT
function compteurdelettre($mot){
    return strlen($mot);
}

echo compteurdelettre("Bonjour à tous");