<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 5 - Conditions et mentions</title>
</head>
<body>

    <?php
    $moyenne = 13; 

    echo "<p><strong>Valeur de la moyenne testée :</strong> " . $moyenne . "</p>";
    echo "<h3>Résultat :</h3>";
    if ($moyenne < 0 || $moyenne > 20) {
        echo "<p>Note invalide</p>";
    } else {
        if ($moyenne < 10) {
            echo "<p>Non validé</p>";
        } elseif ($moyenne >= 10 && $moyenne < 12) {
            echo "<p>Passable</p>";
        } elseif ($moyenne >= 12 && $moyenne < 14) {
            echo "<p>Assez bien</p>";
        } elseif ($moyenne >= 14 && $moyenne < 16) {
            echo "<p>Bien</p>";
        } else { 
            echo "<p>Très bien</p>";
        }
    }
    ?>
    <ul>
    <?php
    $valeurs_tests = [-1, 9, 10, 12, 14, 16, 21];

    foreach ($valeurs_tests as $val) {
        echo "<li>Note <strong>" . $val . "</strong> : ";
        if ($val < 0 || $val > 20) {
            echo "Note invalide";
        } elseif ($val < 10) {
            echo "Non validé";
        } elseif ($val < 12) {
            echo "Passable";
        } elseif ($val < 14) {
            echo "Assez bien";
        } elseif ($val < 16) {
            echo "Bien";
        } else {
            echo "Très bien";
        }
        echo "</li>";
    }
    ?>
    </ul>

    <br>
    <a href="index.php">← Retour à la liste des exercices</a>

</body>
</html>