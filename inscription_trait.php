<?php
require_once'config.php';

if(isset($_POST['nom']) && isset($_POST['prenom']) && isset($_POST['email']) && isset($_POST['date']) && isset($_POST['password']) && isset($_POST['repassword'])){
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $email = htmlspecialchars($_POST['email']);
    $date = htmlspecialchars($_POST['date']);
    $password = htmlspecialchars($_POST['password']);
    $repassword = htmlspecialchars($_POST['repassword']);

    $check = $bdd->prepare('SELECT nom, mail, password FROM utilisateur WHERE email = ?');
    $check->execute(array($email));
    $data = $check->fetch();
    $row = $check->rowCount();

    if($row == 0){
        if(strlen($nom) <= 100){
            if(strlen($email) <= 100){
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    if($password == $repassword){
                        $password = hash('sha256', $password);

                        $insert = $bdd->prepare('INSERT INTO utilisateur(nom,prenom,email,date,password) VALUES(:nom, :prenom, :email, :date, :password');
                        $insert->execute(array(
                            'nom'=>$nom,
                            'prenom' => $prenom,
                            'email' =>$email,
                            'date' => $date,
                            'password' => $password,
                        ));
                        header('Location: inscript.php?reg_err=success');

                    }else header('Location: inscript.php?reg_err=password');
                }else header('Location: inscript.php?reg_err=email');
            }else header('Location: inscript.php?reg_err=email_length');
        }else header('Location: inscript.php?reg_err=nom_length');
    }else header('Location: inscript.php?reg_err=already');
}