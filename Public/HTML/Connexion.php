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

    <section class="main">
        <div class="Main">
            <div class="Text">
                <h3>
                    Connectez-vous
                </h3>
                <br><br><br>
                <div class="wrapper">
                    <div class="form-box login">
                        <form method="post" action="#">
                            <div class="input-box">
                                <input type="text"
                                       id="nom"
                                       name="nom">
                                <label for="nom">Nom : </label>
                            </div>
                            <br><br>
                            <div class="input-box">
                                <input type="password"
                                       id="motdepasse"
                                       name="motdepasse">
                                <label for="motdepasse">Mot de passe :</label>
                            </div>
                            <br>
                            <button
                                type="submit" class="btn">Connexion
                            </button>
                            <br>
                            <div class="login-register">
                                <p>Vous n'avez pas de compte ? <a href="Inscription.php"
                                                                  class="register-link">S'inscrire</a>
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="main2">
        <div class="Main2">
            <img src="../../img/FSI_logo%20(1).png"/>
            <h2> Bienvenue sur l'application web dediée au FSI</h2>
            <div id="triangle">

            </div>
        </div>
    </section>

    </body>
<?php
