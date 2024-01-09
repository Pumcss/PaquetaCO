<?php
require_once "../Config/appConfig.php";
require_once "../Config/globalConfig.php";
require_once "../src/fonctionsUtiles.php";

// Connexion à la base de données
$conn = connectBdd($infoBdd);

$queryParametre = "SELECT dateLimitebil1 FROM parametre_ WHERE idParametre = 1";
$resultParametre = $conn->query($queryParametre);

if ($resultParametre->rowCount() > 0) {
    $rowParametre = $resultParametre->fetch(PDO::FETCH_ASSOC);
    $dateLimiteBilan = $rowParametre['dateLimitebil1'];

    $queryBilansNonRendus = "SELECT Etudiant.nomEtu, Etudiant.prenomEtu
                              FROM Etudiant
                              LEFT JOIN Bilan_1 ON Etudiant.idEtu = Bilan_1.idEtu
                              WHERE Bilan_1.idBil1 IS NULL
                              AND CURRENT_DATE > :dateLimiteBilan";

    $stmt = $conn->prepare($queryBilansNonRendus);
    $stmt->bindParam(':dateLimiteBilan', $dateLimiteBilan, PDO::PARAM_STR);
    $stmt->execute();

    if ($stmt->rowCount() > 0) {
        echo "<h2>Bilan 1 non rendus jusqu'à la date limite :</h2>";
        echo "<ul>";
        while ($rowBilanNonRendu = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $nomEtu = $rowBilanNonRendu['nomEtu'];
            $prenomEtu = $rowBilanNonRendu['prenomEtu'];

            echo "<li>$nomEtu $prenomEtu</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>Tous les bilans ont été rendus à temps.</p>";
    }
} else {
    echo "<p>Erreur : Date limite non définie.</p>";
}
?>