<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 8 - Boucles et contrôle des itérations</title>
</head>
<body>
    <h1>Partie 1</h1>
    <h2>Nombres pairs de 0 à 20 (10 en gras)</h2>
    <?php
    $i = 0;
    while ($i <= 20) {
        if ($i == 10) {
            echo "<strong>$i</strong> ";
        } else {
            echo "$i ";
        }
        $i += 2;
    }
    ?>
    <h1>Partie 2</h1>
    <h2>Comparaison while et do-while</h2>
    <?php
    $compteur = 5;
    $executionWhile = 0;
    while ($compteur < 5) {
        $executionWhile++;
        $compteur++;
    }
    $compteur = 5;
    $executionDoWhile = 0;
    do {
        $executionDoWhile++;
        $compteur++;
    } while ($compteur < 5);

    echo "Nombre d'exécutions de la boucle <code>while</code> : " . $execWhile . "<br>";
    echo "Nombre d'exécutions de la boucle <code>do-while</code> : " . $execDoWhile . "<br>";
    ?>
    <h1>Partie 3</h1>
    <h2>Parcours de 1 à 20</h2>
    <?php
    for ($j = 1; $j <= 20; $j++) {

        if ($j >= 16) {
            break;
        }
        if ($j % 3 == 0) {
            continue;
        }
        echo "$j ";
    }
    ?>

    <br><br>
    <a href="index.php">← Retour à la liste des exercices</a>

</body>
</html>