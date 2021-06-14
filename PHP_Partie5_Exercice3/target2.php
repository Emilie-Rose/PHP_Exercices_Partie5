<?php
$age= $_GET["age"];
if (($age>18)&&($age<130)){
    echo 'Nom : '.$_GET['nom'].' '.', Prénom : ' .$_GET['prenom'].' '.', Âge : ' .intval($age). ' ';
}else{
    echo 'erreur';
}
?>