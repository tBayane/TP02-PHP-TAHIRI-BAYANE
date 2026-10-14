<?php
if (isset($_GET['nom'], $_GET['prenom'], $_GET['groupe'])) {
    $nom = trim($_GET['nom']);
    $prenom = trim($_GET['prenom']);
    $groupe = trim($_GET['groupe']);
    if ($nom !== "" && $prenom !== "" && $groupe !== "") {
        $nomSecurise = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenomSecurise = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        $groupeSecurise = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');
        echo "<p>Bienvenue $prenomSecurise $nomSecurise du groupe $groupeSecurise.</p>";
    } else {
        echo "<p>Erreur : Veuillez remplir tous les champs.</p>";
    }
} else {
    echo "<p>Aucun formulaire n'a été soumis. Veuillez remplir le formulaire.</p>";
}
?>