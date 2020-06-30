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
$quantité = 10 ;
$nb_ajout = 5;
$nb_achat = 5;

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
afficher_description ($couleur, $prix);
?>
</p>

<p>
<?php
afficher_produit ($nom_produit,$couleur,$prix,$disponible);
?>
</p>
<?php 
update_dispo ($quantité)
?>
<p>
<?php
restockage($quantité, $nb_ajout);
?>
</p>
<p>
<?php
achat($quantité, $nb_achat);
?>
</p>

</body>
</html>