<?php
    require_once'config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INscription</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="dolphin-emu.ico" type="image/x-icon">
</head>
<body>

    <?php require 'header.php' ?>

    <div class="wrapper">
    <h2> <strong>LS</strong><em>formation</em></h2>
    <section class="form singin">

    <?php
        if(isset($_GET['reg_err'])){
            $err = htmlspecialchars($_GET['reg_err']);

            switch($err) {
                case 'success':
                    ?>
                    <div class="alert alert-success">
                        <strong>success</strong> Inscription réussie !
                    </div>
                    <?php
                    break;
        
                case 'password':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> Mot de passe differents
                    </div>
                    <?php
                    break;

                case 'email':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> mail non valide 
                    </div>
                    <?php
                    break;

                case 'email_length':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> email trop long
                    </div>
                    <?php
                    break;

                case 'nom_length':
                    ?>
                    <div class="alert alert-danger">
                        <strong>Erreur</strong> nom trop long
                    </div>
                    <?php
                    break;

                case 'already':
                        ?>
                        <div class="alert alert-danger">
                            <strong>Erreur</strong> compte déjà existant 
                        </div>
                        <?php
                        break;   

            }
        }

    ?>

        <form action="user.php" method="post" class="singin">

            <div class="name-details">
                <div class="inni">
                <div class="field input">
                    <label >Nom de l'utilisateur </label>
                    <input type="text" name="nom" placeholder=" Votre nom ">
                </div>

                <div class="field input">
                    <label > Prenom de l'utilisateur  </label>
                    <input type="text" name="prenom" placeholder=" Votre prenom ">
                </div>
                </div>
                
                <div class="field input">
                    <label > Adresse Email  </label>
                    <input type="email" name="email" placeholder=" Votre mail">
                </div>

                <div class="field input">
                    <label > Date de naissance  </label>
                    <input type="date" name="date" placeholder=" Votre date de naissance">
                </div>

                <div class="field input">
                    <label > Nouveau mot de passe  </label>
                    <input type="password" name="password" placeholder=" Votre mot de passe">
                </div>                

                <div class="field input">
                    <label > confirmer mot de passe </label>
                    <input type="password" name="repassword" placeholder=" Resaisissez votre mot de passe   ">
                </div>

                <div class="field input">
                    <label > photo de profil  </label>
                    <input type="file" >
                </div>

                <div class="field button">
                    <input type="submit" value="S'inscrire' ">
                </div>

                <div class="link"> J'ai déjà un comptes <a href="conn.php">Se connecter </a></div>

            </div>
        </form>
    </section>
</div>

    <?php require 'footer.php' ?>

   <div class="copy">
      &copy; mai 2023
   </div>

</body>
</html>