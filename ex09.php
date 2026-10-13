<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Exercice 9 - Tableaux associatifs</title>
    <style>
        table { border-collapse: collapse; width: 50%; margin-bottom: 20px; }
        th, td { border: 1px solid #2c3e50; padding: 12px 15px; text-align: left; }
        th { background-color: #f1f4f8; font-size : 14px; }
    </style>
</head>
<body>
    <?php
    $notes = [
        "Amine" => 12,
        "Sara" => 16,
        "Youssef" => 8,
        "Lina" => 14,
        "Adam" => 10
    ];
    ?>
    <table>
        <tr>
            <th>Étudiant</th>
            <th>Note</th>
            <th>Statut</th>
        </tr>
        <?php
        $somme = 0;
        $nombreEtudiants = count($notes);
        $etudiantsValides = 0;
        
        $meilleureNote = -1;
        $meilleurEtudiant = "";

        foreach ($notes as $etudiant => $note) {
            $somme += $note;
            if ($note >= 10) {
                $statut = "Validé";
                $etudiantsValides++; 
            } else {
                $statut = "Non validé";
            }
            if ($note > $meilleureNote) {
                $meilleureNote = $note;
                $meilleurEtudiant = $etudiant;
            }

            echo "<tr>";
            echo "<td>" . $etudiant . "</td>";
            echo "<td>" . $note . "</td>";
            echo "<td>" . $statut . "</td>";
            echo "</tr>";
        }
        $moyenne = $somme / $nombreEtudiants;
        ?>
    </table>

    <?php
    echo "<p><strong>Moyenne de la classe :</strong> " . $moyenne . "</p>";
    echo "<p><strong>Étudiants ayant validé :</strong> " . $etudiantsValides . " / " . $nombreEtudiants . "</p>";
    echo "<p><strong>Meilleure note :</strong> " . $meilleureNote . " (attribuée à " . $meilleurEtudiant . ")</p>";
    ?>

    <br>
    <a href="index.php">← Retour à la liste des exercices</a>

</body>
</html>