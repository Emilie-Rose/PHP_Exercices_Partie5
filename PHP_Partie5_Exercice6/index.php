<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 5</h1>

    <h2 class="">Exercice 6</h2>
    <p style="color:#8080FF">Créez un lien avec les paramètres "langage", 
    "serveur" dirigeant sur une autre page. Vérifiez si les paramètres existent, 
    si oui affichez les sinon affichez une un message d'erreur. Vous devez 
    empêchez l'inclusion de balises html dans les paramètres.</p>
    
    <?php
    $newPage4=fopen("server3.php","a+");
    fclose($newPage4);
    ?>

    <a href="server3.php?langage=<?php
    $var=strip_tags("PHP");
    htmlspecialchars($var);
    echo $var;?>&serveur=
    <?php echo $_SERVER["HTTP_HOST"]?>">Afficher</a>
</body>
</html>