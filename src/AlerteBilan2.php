<?php
require_once "../Config/appConfig.php";
require_once "../Config/globalConfig.php";
require_once "../src/fonctionsUtiles.php";

// Connexion à la base de données
$conn = connectBdd($infoBdd);

$queryParametre = "SELECT dateLimitebil2 FROM parametre_ WHERE idParametre = 1";
$resultParametre = $conn->query($queryParametre);

if ($resultParametre->rowCount() > 0) {
    $rowParametre = $resultParametre->fetch(PDO::FETCH_ASSOC); // Utilisez PDO::FETCH_ASSOC pour obtenir un tableau associatif
    $dateLimiteBilan = $rowParametre['dateLimitebil2'];


    $queryBilansNonRendus = "SELECT Etudiant.nomEtu, Etudiant.prenomEtu
                              FROM Etudiant
                              LEFT JOIN Bilan_2 ON Etudiant.idEtu = Bilan_2.idEtu
                              WHERE Bilan_2.idBil2 IS NULL
                              AND CURRENT_DATE > :dateLimiteBilan";


    $stmt = $conn->prepare($queryBilansNonRendus);
    $stmt->bindParam(':dateLimiteBilan', $dateLimiteBilan, PDO::PARAM_STR);
    $stmt->execute();

    $resultBilansNonRendus = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($resultBilansNonRendus) > 0) {
        echo "<h2>Bilans 2 non rendus jusqu'à la date limite :</h2>";
        echo "<ul>";
        foreach ($resultBilansNonRendus as $rowBilanNonRendu) {
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