<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
function compter($maximum){
$compteur= 0 ;
while ($compteur < $maximum) 
{
echo $compteur ;
$compteur= $compteur + 1;
}}
compter(10); 
?>
 <br>
<?php
function compter_for ($maximum) {
 for ($compteur=0; $compteur<$maximum; $compteur=$compteur + 1){
 echo "$compteur";
 }
 echo $compteur;
}
compter_for(10)
?>