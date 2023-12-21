<?php

use BO\EtudiantBO;

require_once '../Config/appConfig.php';


$etudiantDAO = new EtudiantDAO();

// Test de la méthode getAll
$etudiants = $etudiantDAO->getAll();

if (!empty($etudiants)) {
    echo "Liste des étudiants :<br>";
    foreach ($etudiants as $etudiant) {
        echo $etudiant->ToStringO() . "<br>";
    }
} else {
    echo "Aucun étudiant trouvé.";
}

?>