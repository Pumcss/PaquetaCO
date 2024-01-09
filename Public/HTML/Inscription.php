<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link href="../CSS/css.css" rel="stylesheet">
</head>
<body>

<section class="main3">
    <div class="Main3">
        <div class="Text">
            <h3>
                Inscrivez-vous
            </h3>
            <br><br><br>
            <div class="wrapper2">
                <div class="form-box login">
                    <form method="post" action="#">
                        <br>
                        <div class="input-box">
                            <input type="text"
                                   id="nom"
                                   name="nom">
                            <label for="nom">Nom : </label>
                        </div>

                        <div class="input-box">
                            <input type="text"
                                   id="email"
                                   name="email">
                            <label for="email">Email : </label>
                        </div>

                        <div class="input-box">
                            <input type="text"
                                   id="telephone"
                                   name="telephone">
                            <label for="telephone">Telephone : </label>
                        </div>

                        <div class="input-box">
                            <input type="password"
                                   id="motdepasse"
                                   name="motdepasse">
                            <label for="motdepasse">Mot de passe :</label>
                        </div>
                        <br>
                        <button
                            type="submit" class="btn">Inscription
                        </button>
                        <br><br>
                        <div class="login-register">
                            <p>Déjà un compte ? <a href="Connexion.php"
                                                   class="register-link">Connexion</a>
                            </p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main4">
    <div class="Main4">
        <img src="../../img/FSI_logo%20(1).png"/>
        <h2> Bienvenue sur l'application web dedié au FSI</h2>
        <div id="triangle">

        </div>
    </div>
</section>

</body>