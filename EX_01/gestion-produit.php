<!DOCTYPE html>
<html>
<?php 
$nom_produit="T-shirt femme";
$couleur="Rouge";
$prix=15.50;
$disponible= false;
$quantité = 10 + $nb_ajout - $nb_achat;
$nb_ajout = 5;
$nb_achat =5;
?>

<?php
function update_dispo($quantité){
    if($quantité>0){
        echo "true";
        return "true";
}
else if($quantité == 0){
    echo "false";
    return "false";
}}
?>
<p>
<?php
function restockage($quantité, $nb_ajout){
    echo "$nb_ajout produits ont été ajoutés au stock";
    return $quantité+ $nb_ajout;
}
?>
</p>
<p>
<?php
function achat($quantité, $nb_achat){
    echo "$nb_achat ont été achetés";
    return $quantité-$nb_achat;
}
?>
</p>


</html>