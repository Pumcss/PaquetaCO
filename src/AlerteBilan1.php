<?php
// Connexion à la base de données
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "P2024_2SIO_Projet_Tutorat";

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connecterror);
}

$queryParametre = "SELECT dateLimitebil1 FROM parametre_ WHERE idParametre = 1";
$resultParametre = $conn->query($queryParametre);

if ($resultParametre->num_rows > 0) {
    $rowParametre = $resultParametre->fetch_assoc();
    $dateLimiteBilan = $rowParametre['dateLimitebil1'];

    $queryBilansNonRendus = "SELECT Etudiant.nomEtu, Etudiant.prenomEtu
                              FROM Etudiant
                              LEFT JOIN Bilan_1 ON Etudiant.idEtu = Bilan_1.idEtu
                              WHERE Bilan_1.idBil1 IS NULL
                              AND CURRENT_DATE > '$dateLimiteBilan'";

    $resultBilansNonRendus = $conn->query($queryBilansNonRendus);

    if ($resultBilansNonRendus->num_rows > 0) {
        echo "<h2>Bilan 1 non rendus jusqu'à la date limite :</h2>";
        echo "<ul>";
        while ($rowBilanNonRendu = $resultBilansNonRendus->fetch_assoc()) {
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


$conn->close();

