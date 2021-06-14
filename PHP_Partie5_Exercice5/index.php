<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 5</h1>

    <h2 class="">Exercice 5</h2>
    <p style="color:#8080FF">Créez un lien avec les paramètres "langage",
     "serveur" dirigeant sur une autre page. Vérifiez si les paramètres
      existants, si oui affichez les sinon affichez un message d'erreur.</p>
    
    <?php
    $newPage3=fopen("server2.php","a+");
    fclose($newPage3);
    ?>
    <a href="server2.php?langage=PHP&serveur=<?php
    echo $_SERVER["HTTP_HOST"]?>">Afficher</a>
</body>
</html>