<?php

//condition simple

$age = 15;
if($age>=18) {
    echo "Majeur";
} else {
    echo "Mineur";
}

//TERNAIRE

$info = ($age>=18)?"majeur":"Mineur";
echo $info;

($age>=18)?$message = "majeur":$message = "Mineur";
echo $message;


($age>=18)?print "Majeur":print "Mineur";


$a = 1;
$b = 2;

if(isset($a) AND isset($b)){
    echo "Ok";
}else {
    echo "pas ok";
}