<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bilans de l'Étudiant</title>
    <link href="../Public/CSS/css2.css" rel="stylesheet">
</head>
<body>

<section class="hero5">
    <nav>
        <form method="post" action="../Public/HTML/Inscription.php">
            <ul class="acc">
                <li><a href="../Public/HTML/Etudiant/AccueilEtudiant.php">Home</a></li>
                <li><a href="../Public/HTML/Etudiant/Mes%20Informations.php">Mes Informations</a></li>
            </ul>
        </form>
    </nav>
</section>

<section class="title3">
    <div>
        <h1>Mes Bilans</h1>
    </div>
</section>

<section class="logo2">
    <nav>
        <img src="../img/FSI_logo_1.png">
    </nav>
</section>

<?php
require_once "../Config/appConfig.php";
require_once "../Config/globalConfig.php";
require_once "../src/fonctionsUtiles.php";

$conn = connectBdd($infoBdd);

function displayBilanTable($bilans)
{
    echo '<div class="tbl-header">';
    echo '<table cellpadding="0" cellspacing="0" border="0">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Type de Bilan</th>';
    echo '<th>Note Dos</th>';
    // Afficher la colonne "Note Entreil" uniquement pour Bilan 1
    if (!empty($bilans) && isset($bilans[0]['noteEntreil'])) {
        echo '<th>Note Entreil</th>';
    }
    echo '<th>Note Orale</th>';
    echo '<th>Remarque</th>';
    echo '</tr>';
    echo '</thead>';
    echo '</table>';
    echo '</div>';
    echo '<div class="tbl-content">';
    echo '<table cellpadding="0" cellspacing="0" border="0">';
    echo '<tbody>';

    foreach ($bilans as $rowBilan) {
        $typeBilan = $rowBilan['typeBilan'];
        $noteDos = $rowBilan['noteDos'];
        $noteEntreil = isset($rowBilan['noteEntreil']) ? $rowBilan['noteEntreil'] : '';
        $noteOrale = $rowBilan['noteOrale'];
        $remarque = $rowBilan['remarque'];

        echo '<tr>';
        echo '<td>' . $typeBilan . '</td>';
        echo '<td>' . $noteDos . '</td>';
        // Afficher la colonne "Note Entreil" uniquement pour Bilan 1
        if (isset($rowBilan['noteEntreil'])) {
            echo '<td>' . $noteEntreil . '</td>';
        }
        echo '<td>' . $noteOrale . '</td>';
        echo '<td>' . $remarque . '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedEtu = $_POST['etudiant'];

    // Requête pour Bilan 1
    $queryBilan1 = "SELECT idBil1, 'Bilan 1' as typeBilan, notedosBil1 as noteDos, noteentreil1 as noteEntreil, noteoraleBil1 as noteOrale, remarqueBil1 as remarque 
                    FROM Bilan_1 
                    WHERE idEtu = 1";

    // Requête pour Bilan 2
    $queryBilan2 = "SELECT idBil2, 'Bilan 2' as typeBilan, notedosBil2 as noteDos, noteoralBil2 as noteOrale, remarqueBil2 as remarque
                FROM Bilan_2 
                WHERE idEtu = 1";

    $stmtBilan1 = $conn->prepare($queryBilan1);
    $stmtBilan1->bindParam(':selectedEtu', $selectedEtu, PDO::PARAM_INT);
    $stmtBilan1->execute();

    $stmtBilan2 = $conn->prepare($queryBilan2);
    $stmtBilan2->bindParam(':selectedEtu', $selectedEtu, PDO::PARAM_INT);
    $stmtBilan2->execute();

    $resultBilan1 = $stmtBilan1->fetchAll(PDO::FETCH_ASSOC);
    $resultBilan2 = $stmtBilan2->fetchAll(PDO::FETCH_ASSOC);

    if (count($resultBilan1) > 0 || count($resultBilan2) > 0) {
        echo '<div class="container">';
        echo '    <div class="container-onglets">';
        echo '        <div class="onglets active" data-anim="1">Bilan 1</div>';
        echo '        <div class="onglets" data-anim="2">Bilan 2</div>';
        echo '    </div>';

        echo '    <section class="contenu activeContenu" data-anim="1">';
        displayBilanTable($resultBilan1);
        echo '    </section>';

        echo '    <section class="contenu" data-anim="2">';
        displayBilanTable($resultBilan2);
        echo '    </section>';

        echo '</div>';
    } else {
        echo "<p>Aucun bilan disponible pour cet étudiant.</p>";
    }

} else {
    echo "<p>Aucun étudiant trouvé.</p>";
}
?>

<script src="../Public/JS/JS%20Test.js"></script>
</body>
</html>