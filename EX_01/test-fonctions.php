<!DOCTYPE html>
<html>
<head>
</head>
<body>

<?php
$nom_produit = "T-shirt femme";
$couleur = " Rouge";
$prix = "15.50";
$disponible =false;
$quantité = 10;

include ("affichage.php");
include ("gestion-produit.php")
?>
<h1>
<?php
afficher_titre($nom_produit);
?>
</h1>
<p>
<?php
afficher_description($couleur, $prix);
?>
</p>
<p>
<?php 
afficher_produit ($nom_produit, $couleur, $prix, $disponible) ;
?>
<?php 
update_dispo ($quantité)
?>
</body>
</html>