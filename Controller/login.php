<?php
    session_start();
    include_once('../Model/Model.php');

    $identifier = htmlspecialchars($_POST['identifiant']);
    $password = htmlspecialchars($_POST['password']);
    $loginMessage = "";

    $bdd = new Model();

    $user = $bdd->findUserByIdentifier($identifier);

    if(!$user) {
        $loginMessage = "Ce compte n'existe pas";
        header("location: ../Controller/home.php?message=$loginMessage");
    } else if($password === $user['password']) {
        
        $_SESSION['userId']=$user['id'];
        $_SESSION['identifier']=$user['firstname']." ".$user['lastname'];
        header('location: ../Controller/compte.php');
    } else {
        $loginMessage = "Mot de passe incorrect";
        header("location: ../Controller/home.php?message=$loginMessage");
    }

    var_dump($user);

    

