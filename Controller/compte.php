<?php
    session_start();
    if(!isset($_SESSION['userId'])) {
        $logMessage="Connectez-vous pour accéder à votre compte";
        header("location: ../Controller/home.php?message=$logMessage");
    }
    $title = "Mes informations";
    $navList =  [
        ["label"=>"Accueil", "path" => "../Controller/home.php"],
        ["label"=>"Détente", "path" => "../Controller/jeux.php"],
        ["label"=>"Modifier compte", "path" => "../Controller/modifyAccount.php"]        
    ];

    include_once('../View/compteView.php');
