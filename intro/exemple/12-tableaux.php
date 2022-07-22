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

                echo "<hr><h2>TABLEAUX ASSOCIATIFS</h2>";
                $person = [
                    "nom" => "Sébastien",
                    'age' => 46
                ];

                echo "Bonjour {$person['nom']}, tu as {$person['age']} ans";
                //MODIFICATION 
                $person['age'] = 30;
                //AJOUT
                $person['taille'] = 170;

                var_dump($person);

                echo "<hr><h2>TABLEAUX ASSOCIATIFS COMPLEXE</h2>";
                $test = [
                    0 => [
                        "id" => 1,
                        "nom" => "Dupond",
                        "prenom" => "Jean",
                        "mail" => "j.d@test.fr",
                        "passion" => ["foot","jeux vidéo","argent"]                    
                    ],
                    1 => [
                        "id" => 2,
                        "nom" => "Allard",
                        "prenom" => "Sophie",
                        "mail" => "a.s@test.fr",
                        "passion" => ["Basket","Tennis","argent"]                    
                    ],
                    2 => [
                        "id" => 3,
                        "nom" => "Paris",
                        "prenom" => "Antho",
                        "mail" => "a.p@test.fr",
                        "passion" => ["peche","guitare","argent"]                    
                    ]
                ];

                echo "<p>Afficher le mail de la deuxieme ligne</p>";
                echo $test[1]["mail"]."<br>";
                echo "<p>Afficher à l'écran bonjour Jean Dupond</p>";
                echo "bonjour {$test[0]["prenom"]}  {$test[0]["nom"]}";
                echo "bonjour ".$test[0]["prenom"]."  ".$test[0]["nom"];

                echo "<hr>";

                 // Foreach pour rentrer dans le tableau Utilisateur
                    foreach($test as $nb => $infos){
                        echo "Utilisateur n°".($nb+1).": <br>";
                        echo "<ul>";
                        // Foreach pour rentrer dans les champs (nom, prenom, mail, passion) -- key = field -- value = info
                        foreach($infos as $field => $info){
                            // is array verifie si la valeur est un tableau
                            if(is_array($info)){
                                echo "<li>".$field." : "."</li>";
                                echo '<ul>';
                                // For pour parcourir le tableau Passion
                                for($i = 0; $i < count($info); $i++){
                                    echo '<li>'.$info[$i]."</li>";
                                }
                                echo '</ul>';
                            // Sinon on agit normalement.
                            } else {
                                echo "<li>".$field." : ".$info."</li>";
                            }     
                        }
                        echo "</ul>";
                    }

                echo "<hr><h2>CLE TABLEAU</h2>";
                echo "ARRAY KEYS<br>";
                var_dump($person,array_keys($person));
                //UNE COPIE DE MON TABLEAU PERSON OU DEDANS J'AURAI KEY = INDEXATION NUMERIQUE
                //VALUE = KEY DU TABLEAU PERSON
                $cleTab = array_keys($person);
                for($i=0;$i<count($cleTab);$i++){
                    echo $cleTab[$i]. " me permet de sortir : ".$person[$cleTab[$i]]."<br>";
                }

                echo "<hr><h2>EXPORT TABLEAU</h2>";
                //POUR LES TABLEAU INDEXE NUMERIQUEMENT 0,1,2,3,4
                $person = array("Seb",45,"bleu","rouge","pomme");
                //ON CREE UNE LISTE A TROU OU ON CREE DES VARIABLES EN MAPPANT LE TABLEAU INITIAL
                list(,$age,,$color) = $person;
                //EQUIVALENT
                $age = $person[1];
                var_dump($age,$color);


                //UTILISER AVEC TABLEAU ASSOCIATIF
                $person = array(
                    "name" => "Anthony",
                    "age" => 34,
                );
                extract($person);
                //EXTRAIT DU TABLEAU LES CLES ET EN CREE DES VARIABLES
                //QUI VONT CONTENIR LA VALEUR ASSOCIE A LA CLE
                echo "$name $age <br>";

                //EQUIVALENT
                $name = $person["name"];
                $age = $person["age"];

                ?>
        </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>