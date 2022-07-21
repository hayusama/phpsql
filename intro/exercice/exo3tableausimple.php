<!-- en partant du tableau suivant :
$tab = [10,15,20,10,5,10];
affiche tous les éléments d'un tableau avec foreach en forme de liste ul li
calcule la moyenne des nombres contenus dans le tableau donné
indique combien d'éléments sont supérieurs ou égaux à 10
teste si la note 20 est présente ou non
détermine la meilleure note obtenue.
placer la derniere note en premier
supprimer la premiere note
trier le tableau du plus petit au plus grand -->

<?php

$tab = [10, 15, 20, 10, 5, 10];
echo "<ul>";
foreach ($tab as $key => $value) {
    echo "<li>id : " . $key . " | Valeur : " . $value . "</li>";
}
echo "</ul>";


$moyenne = array_sum($tab)/count($tab);


echo "La moyenne du tableau est ".$moyenne;

echo "<br>";
echo "<br>";

$tableau = [];
for($i = 0; $i < count($tab); $i++){
    if($tab[$i] >= 10){
        $tableau[] =+ 1;
    }
}

echo count($tableau);


$test = 20;

if(in_array($test, $tab)){
    echo "La note ".$test." est présente dans le tableau";
}

$top = max($tab);
echo "<br>la meilleur note est:" . $top;



array_unshift($tab,array_pop($tab));


array_shift($tab);

sort($tab);