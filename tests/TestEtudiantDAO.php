<?php

use BO\EtudiantBO;

require_once '../Config/appConfig.php';


$etudiant = new EtudiantBO();
$etudiant->setNomEtu("John");
$etudiant->setPreEtu("Doe");
$etudiant->setPhotoEtu("john_doe.jpg");
$etudiant->setMailEtu("john.doe@example.com");
$etudiant->setTelEtu("123456789");
$etudiant->setLoginEtu("john.doe");
$etudiant->setMapEtu("Adresse John Doe");
$etudiant->setSpeEtu("Informatique");

$etudiantDAO = new EtudiantDAO();

// Test de la méthode create
if ($etudiantDAO->create($etudiant)) {
    echo "Étudiant créé avec succès!";
} else {
    echo "Erreur lors de la création de l'étudiant.";
}

?>