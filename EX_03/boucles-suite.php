<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
function compter_dizaine($maximum){
 $compteur= 1 ;
while ($compteur <= $maximum) 
{
    echo $compteur ;
echo "<br>";
if($compteur%100==0){
    echo "Ceci est une centaine<br>";
}
   else if($compteur%10==0){
    echo "Ceci est une dizaine<br>";
}
$compteur= $compteur + 1;
}}
compter_dizaine(100); 
?>
</body>
</head>