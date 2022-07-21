<?php


define("ADMIN_EMAIL", "admin@test.fr");

echo ADMIN_EMAIL;


//SI LA CONSTANTE est défini (attention guillemet)
if(defined("ADMIN_EMAIL")){
    echo "---------constante défini-----------";
} else {
    echo "---------constante non défini-----------";
}


define("ADMIN_EMAIL", "admin3@test3.fr");