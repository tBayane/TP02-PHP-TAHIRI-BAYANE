<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 7 - Boucles for</title>
</head>
<body>

    <h1>Exercice 7 : Boucles for (table de multiplication et pyramide)</h1>
        <h2>Table de multiplication de 7</h2>
        <?php
        $nombre = 7;
        for ($i = 1; $i <= 10; $i++) {
            $resultat = $nombre * $i;
            echo $nombre . " &times; " . $i . " = " . $resultat . "<br>";
        }
        ?>
        <h2>Pyramide de six lignes d'étoiles</h2>
        <?php
        for ($ligne = 1; $ligne <= 6; $ligne++) {
            for ($j = 1; $j <= $ligne; $j++) {
                echo "*";
            }
            echo "<br>";
        }
        ?>
    <br>
    <a href="index.php">← Retour à la liste des exercices</a>

</body>
</html>