<?php
require_once '../Config/appConfig.php';


use DAO\Bilan2DAO;

if (isset($_GET["idBil2"])){
    $bilan2DAO = new Bilan2DAO();
    $bil2 = $bilan2DAO->read($_GET["idBil2"]);
}else
    $bil2=null;

?>

    <!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes informations</title>
</head>
<body>
<a href="TestBilan2.php?idBil2=3">bilan2</a>
<ul>
    <li><b>Date :  <?=$bil2->getDateBil2()?></b></li>
    <li><b>Note dossier : <?=$bil2->getNotedosBil2()?> </b></li>
    <li><b>Note orale : <?=$bil2->getNoteoralBil2()?></b></li>
    <li><b>Remarque : <?=$bil2->getRemarqueBil2()?></b></li>
    <li><b>Memoire : <?=$bil2->getMemoirBil2()?></b></li>

</ul>

</body>
    </html><?php
