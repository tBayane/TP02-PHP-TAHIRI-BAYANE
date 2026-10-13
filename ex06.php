<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 6 - Structure switch</title>
</head>
<body>
    <?php 
    $numeroMois = 3;
    echo "<p>Test avec la valeur fixe : <strong>" . $numeroMois . "</strong></p>";
    echo "<p>Résultat : ";
    switch ($numeroMois) {
        case 1:
            echo "Janvier";
            break;
        case 2:
            echo "Février";
            break;
        case 3:
            echo "Mars";
            break;
        case 4:
            echo "Avril";
            break;
        case 5:
            echo "Mai";
            break;
        case 6:
            echo "Juin";
            break;
        case 7:
            echo "Juillet";
            break;
        case 8:
            echo "Août";
            break;
        case 9:
            echo "Septembre";
            break;
        case 10:
            echo "Octobre";
            break;
        case 11:
            echo "Novembre";
            break;
        case 12:
            echo "Décembre";
            break;
        default:
            echo "Numéro de mois invalide";
            break;
    }
    echo "</p>";
    echo "<h2>Tests demandés (1, 3, 12, 15) :</h2>";
    $valeursTests = [1, 3, 12, 15];
    foreach ($valeursTests as $m) {
        echo "Mois $m : <strong>";
        switch ($m) {
            case 1: echo "Janvier"; break;
            case 2: echo "Février"; break;
            case 3: echo "Mars"; break;
            case 4: echo "Avril"; break;
            case 5: echo "Mai"; break;
            case 6: echo "Juin"; break;
            case 7: echo "Juillet"; break;
            case 8: echo "Août"; break;
            case 9: echo "Septembre"; break;
            case 10: echo "Octobre"; break;
            case 11: echo "Novembre"; break;
            case 12: echo "Décembre"; break;
            default: echo "Numéro de mois invalide"; break;
        }
        echo "</strong><br>";
    }
    $moisCourant = (int) date("m");
    echo "<h2>Mois courant du serveur :</h2>";
    echo "<p>Numéro actuel : " . $moisCourant . " -> Mois correspondant : <strong>";

    switch ($moisCourant) {
        case 1: echo "Janvier"; break;
        case 2: echo "Février"; break;
        case 3: echo "Mars"; break;
        case 4: echo "Avril"; break;
        case 5: echo "Mai"; break;
        case 6: echo "Juin"; break;
        case 7: echo "Juillet"; break;
        case 8: echo "Août"; break;
        case 9: echo "Septembre"; break;
        case 10: echo "Octobre"; break;
        case 11: echo "Novembre"; break;
        case 12: echo "Décembre"; break;
        default: echo "Numéro de mois invalide"; break;
    }
    echo "</strong></p>";
    ?>

    <br>
    <a href="index.php">← Retour à la liste des exercices</a>

</body>
</html>