<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bilans de l'Étudiant</title>
</head>
<body>

<?php
require_once "../Config/appConfig.php";
require_once "../Config/globalConfig.php";
require_once "../src/fonctionsUtiles.php";


$conn = connectBdd($infoBdd);

$queryEtudiants = "SELECT idEtu, nomEtu, prenomEtu FROM Etudiant";
$resultEtudiants = $conn->query($queryEtudiants);

if ($resultEtudiants->rowCount() > 0) {
    echo "<form method='post'>";
    echo "<label for='etudiant'>Sélectionnez un étudiant :</label>";
    echo "<select name='etudiant' id='etudiant'>";

    // Afficher la liste des étudiants dans la liste déroulante
    while ($rowEtudiant = $resultEtudiants->fetch(PDO::FETCH_ASSOC)) {
        $idEtu = $rowEtudiant['idEtu'];
        $nomEtu = $rowEtudiant['nomEtu'];
        $prenomEtu = $rowEtudiant['prenomEtu'];
        echo "<option value='$idEtu'>$nomEtu $prenomEtu</option>";
    }

    echo "</select>";
    echo "<input type='submit' value='Afficher les bilans'>";
    echo "</form>";


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $selectedEtu = $_POST['etudiant'];


        $queryBilans = "SELECT idBil1, 'Bilan 1' as typeBilan, notedosBil1 as noteDos, noteentreil1 as noteEntreil, noteoraleBil1 as noteOrale, remarqueBil1 as remarque 
                        FROM Bilan_1 
                        WHERE idEtu = :selectedEtu
                        UNION
                        SELECT idBil2, 'Bilan 2' as typeBilan, notedosBil2 as noteDos, NULL as noteEntreil, noteoralBil2 as noteOrale, remarqueBil2 as remarque
                        FROM Bilan_2 
                        WHERE idEtu = :selectedEtu";

        $stmt = $conn->prepare($queryBilans);
        $stmt->bindParam(':selectedEtu', $selectedEtu, PDO::PARAM_INT);
        $stmt->execute();


        $resultBilans = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (count($resultBilans) > 0) {
            echo "<h2>Bilans de l'Étudiant :</h2>";
            echo "<table border='1'>";
            echo "<tr><th>Type de Bilan</th><th>Note Dos</th><th>Note Entreil</th><th>Note Orale</th><th>Remarque</th></tr>";
            foreach ($resultBilans as $rowBilan) {
                $typeBilan = $rowBilan['typeBilan'];
                $noteDos = $rowBilan['noteDos'];
                $noteEntreil = $rowBilan['noteEntreil'];
                $noteOrale = $rowBilan['noteOrale'];
                $remarque = $rowBilan['remarque'];

                echo "<tr><td>$typeBilan</td><td>$noteDos</td><td>$noteEntreil</td><td>$noteOrale</td><td>$remarque</td></tr>";
            }
            echo "</table>";
        } else {
            echo "<p>Aucun bilan disponible pour cet étudiant.</p>";
        }
    }
}


?>

</body>
</html>