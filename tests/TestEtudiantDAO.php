<?php

require_once '../Config/appConfig.php';

use BO\EtudiantBO;
use DAO\EtudiantDAO;


/*

$etudiant = new EtudiantBO(
    'fromage',
    'anthony',
    '',
    'anthonyf_69@icloud.com',
    '0647493339',
    'antho',
    '',
    'bts',
    1,
    1,
);


$etudiantDAO = new EtudiantDAO();

// Test de la méthode create
if ($etudiantDAO->create($etudiant)) {
    echo "<br/>Étudiant créé avec succès!";
} else {
    echo "<br/>Erreur lors de la création de l'étudiant.";
}

*/
$etudiantDAO= New EtudiantDAO($infoBdd);
$lesEtudiants=$etudiantDAO->getAll();
var_dump ($lesEtudiants );

if (isset($_GET["idEtu"])){
    $etudiantDAO = new EtudiantDAO();
    $etu = $etudiantDAO->read($_GET["idEtu"]);
}else
    $etu=null;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes Informations</title>
</head>
<body>
<a href="TestEtudiantDAO.php?idEtu=3">Vers le plus nul Etudiant</a>
<ul>
    <li><b>Nom :  <?=$etu->getNomEtu()?></b></li>
    <li><b>Prenom : <?=$etu->getPrenomEtu()?> </b></li>
    <li><b>Mail :<?=$etu->getMailEtu()?></b></li>
    <li><b>Telephone : <?=$etu->getTelEtu()?></b></li>
    <li><b>Specialite : <?=$etu->getSpeEtu()?></b></li>
</ul>

</body>
</html>
