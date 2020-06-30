<!DOCTYPE html>
<html>
<head>
<title>boucles imbriquées PGP</title>
<link href=""rel="stylesheet">
<meta charset="UTF-8">
</head>
<body>
 
<?php
function clock(){
    for($i = 0; $i < 24; $i++){
        for($j = 0; $j < 60; $j++){
            if($j < 10 && $i < 10){
                echo "<p>0" . $i . ":0" . $j ."</p>";
            }
            elseif($i < 10){
                echo "<p>0" . $i . ":" . $j . "</p>";
            }
            elseif($j < 10){
                echo "<p>" . $i . ":0" . $j . "</p>";
            }
            else{
                echo "<p>" . $i . ":" . $j . "</p>";
            }
        }
    }
    return 0;
    }
    clock();
?>
</body>
</html>
