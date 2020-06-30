<!DOCTYPE html>
<html>
<?php 
$str1 = "La maitrise des fondamentaux du code et de la programmation dans les domaines du business, du marketing et de la communication est un avantage serieux et utile." ;
$str1encaractere = strlen($str1);
$str_word_count =(str_word_count($str1, 0));
$mb_strtolower = mb_strtolower($str1);
$strtoupper = strtoupper($str1);
$str_shuffle = str_shuffle($str1);
$str2 = "est un avantage sérieux et utile.";
$str1caractere2 = str1en($str2);
$substr = substr($str1, 0- $str1caractere2);
?>
<body>
<p>
<?php 
echo "La chaîne <B>str1</B> contient $str1encaractere caractères " 
?>
</p>
<p>
<?php
echo "La chaîne <B>str1</B> contient $str_word_count mots"
?>
</p>
<p>
<?php
echo $mb_strtolower;
?>
</p>
<p>
<?php
echo $strtoupper;
?>
</p>
<?php
echo $str_shuffle;
?>
<?php 
echo "La chaine <B>str2</B> contient $str1caractere2 caracteres";
?>
</p>
<p>
<?php
echo $substr;
?>
</p>
</body>