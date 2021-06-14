<?php
function getError(){
$serv=$_GET["serveur"];
  if(isset($_GET["langage"]) &&($_GET["serveur"])==$_SERVER["HTTP_HOST"]){
    return "Langage : ".$_GET["langage"]." - Serveur: ".$serv;
  }else{
    echo "erreur";
  }
}
  echo getError();
?>