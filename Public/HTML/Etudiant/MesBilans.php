
<!DOCTYPE html>
<html lang="en" >
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="../../CSS/css2.css" rel="stylesheet">

</head>
<body>

<section class="hero5">
    <nav>
        <form method="post" action="../Inscription.php">
            <ul class="acc">
                <li><a href="../Etudiant/AccueilEtudiant.php">Home</a> </li>
                <li><a href="../Etudiant/Mes%20Informations.php">Mes Informations</a> </li>
            </ul>
    </nav>
</section>



<section class="title3">
    <div>
            <h1>Mes Bilans</h1>
    </div>
</section>

<section class="logo2">
    <nav>
        <img src="../../../img/FSI_logo_1.png">
    </nav>
</section>


<div class="container">
    <div class="container-onglets">
        <div class="onglets active" data-anim="1">Bilan 1</div>
        <div class="onglets" data-anim="2">Bilan 2</div>
    </div>

    <section class="contenu activeContenu" data-anim="1">
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                <th>
                    <th>Date Visite</th>
                    <th>Note Entreprise</th>
                    <th>Note Dossier</th>
                    <th>Note Oral</th>
                    <th> Remarques </th>
                </tr>
                </thead>
            </table>
        </div>
        <br>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                <tr>
                    <td>12/02/2024</td>
                    <td>15</td>
                    <td>12</td>
                    <td>11</td>
                    <td>Lorem Lorem ipsum dollar </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>

    <section class="contenu" data-anim="2">
        <div class="tbl-header">
            <table cellpadding="0" cellspacing="0" border="0">
                <thead>
                <tr>
                    <th>Date Visite</th>
                    <th>Note Entreprise</th>
                    <th>Note Dossier</th>
                    <th>Note Oral</th>
                    <th>Remarques</th>
                </tr>
                </thead>
            </table>
        </div>
        <div class="tbl-content">
            <table cellpadding="0" cellspacing="0" border="0">
                <tbody>
                <tr>
                    <td>12/02/2024</td>
                    <td>15</td>
                    <td>12</td>
                    <td>11</td>
                    <td>Lorem Lorem ipsum dollar </td>
                </tr>
                </tbody>
            </table>
        </div>
    </section>
</div>


<script src="../../JS/JS%20Test.js"></script>
</body>
</html>
