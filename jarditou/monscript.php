<?php

echo "Nom : ".$_REQUEST["nom"]."<br>";
echo "Prénom : ".$_REQUEST["prénom"]."<br>";
foreach ($_REQUEST["Fciv"] as $sexe){ 
    echo "civilite : ".$sexe."<br>"; 
}

echo "Naissance : ".$_REQUEST["ddn"]."<br>";
echo "Code postal : ".$_REQUEST["cp"]."<br>";
echo "Adresse : ".$_REQUEST["adr"]."<br>";
echo "Ville : ".$_REQUEST["ville"]."<br>";
echo "Email : ".$_REQUEST["email"]."<br>";
echo "Controle : ".$_REQUEST["controle"]."<br>";
echo "Sujet : ".$_REQUEST["sujet"]."<br>";
echo "Question : ".$_REQUEST["question"]."<br>";
echo "Check : ".$_REQUEST["check"]."<br>";

?>