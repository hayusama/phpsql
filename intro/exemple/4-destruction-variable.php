<?php

$var1 = 5;
unset($var1);
var_dump($var1);

$letters = array('a','b','c');
unset($letters[1]);
var_dump($letters);

//ATTENTION ON NE PEUT PLUS UTILISER LE FOR CAR TROU DANS L'INDEXATION