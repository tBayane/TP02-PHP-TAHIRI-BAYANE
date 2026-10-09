<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 2 - TP02 PHP</title>
</head>
<body>

<?php
$nom = "Young";
$prenom = "Marry";
$age =27;
$formation = "Data Analyste";
$presentation = "Je m'appelle " . $prenom . " " . $nom . ", j'ai " . $age . " ans et je suis en formation de " . $formation . ".";
$presentation .= " J'apprends PHP.";

echo "<p>" . $presentation . "</p>";
$note = 12;
$Note = 16;

echo "<p>Valeur de la variable \$note : " . $note . "</p>";
echo "<p>Valeur de la variable \$Note : " . $Note . "</p>";
?>

</body>
</html>