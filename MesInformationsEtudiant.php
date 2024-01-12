<?php

require_once 'Config/appConfig.php';

use BO\EtudiantBO;
use DAO\EtudiantDAO;



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
    <title>Mes informations</title>
</head>
<body>
<a href="MesInformationsEtudiant.php?idEtu=3">Vers le Best Etudiant</a>
<ul>
    <li><b>Nom :  <?=$etu->getNomEtu()?></b></li>
    <li><b>Prenom : <?=$etu->getPrenomEtu()?> </b></li>
    <li><b>Mail :<?=$etu->getMailEtu()?></b></li>
    <li><b>Telephone : <?=$etu->getTelEtu()?></b></li>
    <li><b>Specialite : <?=$etu->getSpeEtu()?></b></li>
</ul>

</body>
</html>
