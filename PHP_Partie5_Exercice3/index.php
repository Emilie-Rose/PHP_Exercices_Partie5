<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 3</h1>

    <h2 class="">Exercice 1</h2>
    <p style="color:#8080FF">Créez un lien avec les paramètres "nom", "prénom" 
    et "âge" dirigeant sur une autre page. Si l'âge est supérieur à 18 et 
    inférieur à 130 affichez ces paramètres. L'âge ne peut être qu'un entier. </p>

<!-- methode 1 -->
    <?php
    $newPage1=fopen("page2.php","a+");
    fclose($newPage1);
    ?>
    <a href="page2.php?nom=MOLINA&amp;prenom=Emilie&amp;age=88">Afficher</a>
<!-- methode 2 -->
</body>
</html>