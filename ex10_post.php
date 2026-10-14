<?php
if (isset($_POST['nom'], $_POST['prenom'], $_POST['groupe'])) {
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $groupe = trim($_POST['groupe']);

    if ($nom !== "" && $prenom !== "" && $groupe !== "") {
        $nomSecurise = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
        $prenomSecurise = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
        $groupeSecurise = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');

        echo "Bienvenue $prenomSecurise $nomSecurise du groupe $groupeSecurise.";
    } else {
        echo "Veuillez remplir tous les champs.";
    }
} else {
    echo "Aucun formulaire n'a ete soumis.";
}
?>