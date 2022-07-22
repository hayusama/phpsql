<!doctype html>
<html lang="fr">
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
            $chaine = "Bonjour a tous";
            //$chaine = htmlentities($chaine,ENT_QUOTES);
            //COMPTER LE NOMBRES DE CARACTERES
            echo "Nombre de caractères de $chaine : ".strlen($chaine)."<br>";
            echo "<hr>";
            echo "Lettre en position 1 : {$chaine[1]}";
            echo "<hr>";
            for($i=0;$i<strlen($chaine);$i++){
                echo $chaine[$i]." ";
            }

            echo "<hr>";
            //ENCRYPTAGE (A L'ANCIENNE)
            echo md5("Bonjour a tous");
            echo "<hr>";
            echo sha1("soleil");
            echo "<hr>";
            echo strtoupper($chaine)." ---- ".strtolower($chaine)." ---- ".ucfirst($chaine);
            $tab_chaine = str_split($chaine);
            var_dump($tab_chaine);

            $chaine_info = "pizza,coca,biere,pain";
            //PERMET D'EXPLOSER UNE CHAINE EN UN TABLEAU
            $tab_chaine_info = explode(",",$chaine_info);
            var_dump($tab_chaine_info);

            //CONCATENATION MULTI LIGNE
            $html = "<p> salut visite mon site <a href=\"https://www.google.fr\">ici</a></p>";
            $html .= "<script>location.href=\"https://www.google.fr\"</script>";
            //PERMET DE NETTOYER LA CHAINE DE CARACTERES COTE
            echo htmlspecialchars($html);
            
        ?>


            
      </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>