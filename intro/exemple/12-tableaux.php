<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
        <div class="container mt-3">
            <?php
                echo "<hr><h2>AFFICHAGE</h2>";
                $liens = ['Accueil','Produit','Services','Contact'];
                $fruits = array('pommes','poires',"bananes");
                $personne = array("id" => 3, "nom" => "Paris", "prenom"=> "Anthony");
                
                var_dump($liens,$fruits,$personne);

                echo "<hr><h2>AJOUT/MODIFICATION</h2>";
                //MODIFICATION
                $fruits[0] = "Oranges";
                $fruits[3] = "Abricot";
                $fruits[] = "Fraises";
                $fruits[52] = "Tomates";
                var_dump($fruits);

                echo "<hr><h2>AFFICHAGE</h2>";
                
                echo "<ol>";
                    for($i=0;$i<count($liens);$i++){
                        echo "<li>{$liens[$i]}</li>";
                    }
                echo "</ol>";

                echo "<ol>";
                    foreach($personne as $key => $value){
                        echo "<li>ind : ".$key." | Valeur : ".$value."</li>";
                    }
                echo "</ol>";


                echo "<hr><h2>BOUGER LE POINTEUR DU TABLEAU</h2>";
                for($i=0;$i<count($liens);$i++){
                    //VALEUR COURANTE
                    echo $i." = ".current($liens);
                    //ON AVANCE LE CURSEUR DE 1 CASE
                    next($liens);
                }
                //replace le pointeur du tableau au début
                echo "<br>";
                reset($liens);
                $i=0;

                //CURRENT VALEUR ACTUELLE DE LA CASE DU TABLEAU
                //EMPTY = SI VIDE // !empty SI NON VIDE
                while(!empty(current($personne))){
                    echo $i." = ".current($personne);
                    next($personne);
                    $i++;
                }

                echo "<hr><h2>MANIPULATION TABLEAU</h2>";
                echo "<hr><h3>AJOUT</h3>";
                $tab = ["orange","fraise"];
                //POSSIBILITE 1 UTile quand on a qu'un element
                $tab[] = "pomme";
                //POSSIBILITE 2 plusieurs elements
                array_push($tab,"banane","poire","peche");
                var_dump($tab);

                array_unshift($tab,"Citron");
                var_dump($tab);

                echo "<hr><h3>SUPPRESSION</h3>";
                //SUPPRESSION
                $lastElm = array_pop($tab);
                //AJOUT DEBUT TABLEAU
                array_unshift($tab,$lastElm);
                var_dump($tab);

                //SUPPRESSION PREMIER ELEMENT
                $firstDelete = array_shift($tab);
                var_dump($tab,$firstDelete);




                ?>
        </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>