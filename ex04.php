<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 4 - TP02 PHP</title>
</head>
<body>

<h1>Exercice 4</h1>

<?php
$var1 = 42;          
$var2 = "42";        
$var3 = 15.8;        
$var4 = true;        
$var5 = false;     
$var6 = null;        

echo "<h2>1. Examen initial avec var_dump()</h2>";
echo "<pre>";
var_dump($var1, $var2, $var3, $var4, $var5, $var6);
echo "</pre>";

$conv1 = (int)$var2; 
$conv2 = (int)$var3; 
$conv3 = (string)$var1; 

echo "<h2>2. Résultats des conversions</h2>";
echo "<pre>";
echo "Conversion de \"42\" en entier : ";
var_dump($conv1);
echo "Conversion de 15.8 en entier : ";
var_dump($conv2);
echo "Conversion de 42 en chaîne : ";
var_dump($conv3);
echo "</pre>";

echo "<h2>3. Affichage de true et false</h2>";
echo "<p>Affichage de true avec echo : " . $var4 . "</p>";
echo "<p>Affichage de true : " . ($var4 ? 'true' : 'false') . "</p>";
echo "<p>Affichage de false avec echo : [" . $var5 . "]</p>";

echo "<pre>";
echo "var_dump de true : ";
var_dump($var4);
echo "var_dump de false : ";
var_dump($var5);
echo "</pre>";

$b1 = (bool)0;
$b2 = (bool)"0";
$b3 = (bool)"PHP";
$b4 = (bool)[];

echo "<h2>4. Conversions en booléens</h2>";
echo "<pre>";
echo "(bool)0 : "; var_dump($b1);
echo "(bool)\"0\" : "; var_dump($b2);
echo "(bool)\"PHP\" : "; var_dump($b3);
echo "(bool)[] : "; var_dump($b4);
echo "</pre>";
?>

</body>
</html>