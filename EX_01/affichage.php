<!DOCTYPE html>
<html>
<?php
$nom_produit = "T-shirt femme";
$couleur = " Rouge";
$prix = 15.50;
$disponible =false;
$quantité = 10;

function afficher_titre ($nom_produit)
{
    echo $nom_produit;

}
function afficher_description ($couleur, $prix)
{
    echo $couleur, $prix;
}
?>
<?php
function afficher_produit($nom_produit, $couleur, $prix, $disponible){
if($disponible == true)
{
    afficher_titre($nom_produit);
    afficher_description($couleur, $prix);
}
else if($disponible == false)
{
    echo "Le produit $nom_produit n'est malheureusement plus disponible";
}}
?>
</html>