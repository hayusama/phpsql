<?php

$score = 8;


switch($score){
    case 1:
        $message = "e";
        break;
    case 2:
    case 3:
        $message = "d";
        break;
    case 4:
    case 5:
        $message = "c";
        break;
    case 6:
    case 7:
        $message = "b";
        break;
    case 8:
    case 9:
        $message = "a";
        break;
    case 10:
        $message = "a+";
        break;
    default:
        $message = "Vous avez triché";
}

echo $message;