<!DOCTYPE html>
<html lang="fr">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Connexion</title>
   <link rel="stylesheet" href="style.css">
   <script src="conn.js"></script>
</head>
<body>
    
   <?php require 'header.php' ?>
   
<div class="wrapper">
    <h2> <strong>LS</strong><em>formation</em></h2>

    <section class="form login">
    <?php
            if(isset($_GET['login_err'])){
                $err = htmlspecialchars($_GET['login_err']);

                switch($err){
                    case 'password':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> mot de passe incorrect
                        </div>
                        <?php
                        break;

                    case 'email':
                            ?>
                            <div class="alert alert-danger">
                                <strong>Erreur</strong> email incorrect
                            </div>
                            <?php
                            break;

                    case 'already':
                                ?>
                                <div class="alert alert-danger">
                                    <strong>Erreur</strong> ce compte n'existe pas !
                                </div>
                                <?php
                                break;
                }
            }
        ?>
        <form action="user .php">
            <div class="name-details">
                <div class="field input">
                    <label > Identifiant </label>
                    <input type="email" name="email" placeholder=" Votre mail ou identifiant ">
                </div>

                <div class="field input">
                    <label > mot de passe  </label>
                    <input type="password" name="password" placeholder=" Votre mot de passe  ">
                </div>

                <div class="field button">
                    <input type="submit" value="Se connecter ">
                </div>

                <div class="link"> Je n'ai pas encore un compte <a href="inscript.php">S'inscrire</a></div>

            </div>
        </form>
    </section>
</div>
</body>

<?php require 'footer.php' ?>
</html>

<?php 
    

?>