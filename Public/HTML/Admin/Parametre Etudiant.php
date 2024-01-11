<?php
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Title</title>
        <link href="../../CSS/css2.css" rel="stylesheet">
    </head>
    <body>

    <section class="hero8">
        <nav>
            <form method="post" action="../Inscription.php">
                <ul class="acc8">
                    <li><a href="../Admin/AccueilAdmin.php">Home</a> </li>
                    <li><a href="../Admin/Parametres.php">Paramètres</a> </li>
                </ul>
        </nav>
    </section>

    <nav class="logo8">
        <img src="../../../img/FSI_logo_1.png">
    </nav>

    <section class="titre8">
        <div>
            <h1>Paramètres Etudiants</h1>
            <h3>Ici vous avez accès aux paramétres de tout les utilisateurs</h3>
        </div>
    </section>

    <section class="corpus8">
        <label for="etudiant">Nom de l'étudiant : </label>
        <select name="etudiant">
            <option value="0">Faites votre choix</option>
            <option value="1">Ilias</option>
            <option value="2">Jessim</option>
            <option value="3">Branis</option>
            <option value="3">Anthony</option>
        </select><br><br>
    </section><?php
