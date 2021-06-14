<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 5</h1>

    <h2 class="">Exercice 2</h2>
    <p style="color:#8080FF">Créez un lien avec les paramètres "nom", 
    "prénom" et "âge" dirigeant sur une autre page et affichez ces paramètres. </p>

    <a href="target.php?nom=MOLINA&amp;prenom=Emilie&amp;age=32">Lien</a>
    <?php
    $newPage=fopen("target.php","a+");
    fclose($newPage);
    ?>
</body>
</html>