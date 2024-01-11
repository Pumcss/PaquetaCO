<?php

require_once 'Config/appConfig.php';

use BO\TuteurEcoleBO;
use DAO\TuteurEcoleDAO;


if (isset($_GET["idTut"])) {
    $tuteurDAO = new TuteurEcoleDAO();
    $tut = $tuteurDAO->read($_GET["idTut"]);
} else
    $tut = null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes informations</title>
</head>
<body>
<a href="MesInformationsTuteur.php?idTut=1">Premier tuteur</a>
<ul>
    <li><b>Nom : <?= $tut->getNomTut() ?></b></li>
    <li><b>Prenom : <?= $tut->getPrenomTut() ?> </b></li>
    <li><b>Mail :<?= $tut->getMailTut() ?></b></li>
    <li><b>Telephone : <?= $tut->getNumTut() ?></b></li>
    <li><b>login : <?= $tut->getLoginTut() ?></b></li>
    <li><b>Role : <?= $tut->getRoleTut() ?></b></li>
</ul>

</body>
</html>
