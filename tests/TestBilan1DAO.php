<?php
require_once '../Config/appConfig.php';


use BO\Bilan1BO;
use DAO\Bilan1DAO;

$note = $_POST['noteDosBilan'];

if (isset($_GET["idBil1"])){
    $bilan1DAO = new Bilan1DAO();
    $bil1 = $bilan1DAO->read($_GET["idBil1"]);
}else
    $bil1=null;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes informations</title>
</head>
<body>
<a href="Bilan1.php?idBil1=3">bilan1</a>
<ul>
    <li><b>Date :  <?=$bil1->getDateVisiteBil1()?></b></li>
    <li><b>Note dossier : <?=$bil1->getNotedosBil1()?> </b></li>
    <li><b>Note entretien :<?=$bil1->getNoteEntretienBil1()?></b></li>
    <li><b>Note orale : <?=$bil1->getNoteOraleBil1()?></b></li>
    <li><b>Remarque : <?=$bil1->getRemarqueBil1()?></b></li>
</ul>

</body>
</html>