<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <?php
            //NULL COALESCENT = SI $GET[nom] existe $nom = $GET[nom] sinon texte pas defaut
            $nom = $_GET['nom'] ?? "aucun";
            $prenom = $_GET['prenom'] ?? "aucun";

            echo "Bonjour {$nom} {$prenom}";

            var_dump($_GET);

            var_dump($_SERVER);

        ?>
    </div>
</body>
</html>

