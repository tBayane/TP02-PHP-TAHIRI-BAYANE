<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 3 - TP02 PHP</title>
</head>
<body>

<?php
define("TAUX_TVA", 20);
define("DEVISE", "MAD");

$prixUnitaireHT = 60;
$quantite = 3;

$totalHT = $prixUnitaireHT * $quantite; 
$montantTVA = $totalHT * (TAUX_TVA / 100); 
$totalTTC = $totalHT + $montantTVA; 

$totalTTC += 15; 
$tvaExiste = defined("TAUX_TVA") ? "Oui" : "Non";
?>

<h1>Récapitulatif de la commande</h1>
<ul>
    <li>Prix unitaire HT : <?= $prixUnitaireHT . " " . DEVISE ?></li>
    <li>Quantité : <?= $quantite ?></li>
    <li>Total HT : <?= $totalHT . " " . DEVISE ?></li>
    <li>Montant TVA (<?= TAUX_TVA ?>%) : <?= $montantTVA . " " . DEVISE ?></li>
    <li>Total TTC (avec frais de livraison) : <?= $totalTTC . " " . DEVISE ?></li>
    <li>La constante TAUX_TVA est définie : <?= $tvaExiste ?></li>
</ul>

</body>
</html>