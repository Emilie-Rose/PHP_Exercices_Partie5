<html lang="fr"></html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <h1>Exercices PHP - Partie 5</h1>

    <h2 class="">Exercice 1</h2>
    <p style="color:#8080FF">Créez un lien avec les paramètres "nom" et "prénom" 
    dirigeant sur la page courante et affichez ces paramètres. </p>
    
        <a href="index.php?nom=MOLINA&amp;prenom=Emilie">lien</a>
    <?php
    echo 'Nom : '.$_GET['nom'].' '.'Prénom : ' .$_GET['prenom'];
    ?>
</body>
</html>