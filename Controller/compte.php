<?php
    $title = "Mes informations";
    $navList =  [
        ["label"=>"Accueil", "path" => "../Controller/home.php"],
        ["label"=>"Détente", "path" => "../Controller/jeux.php"],
        ["label"=>"Modifier compte", "path" => "../Controller/modifyAccount.php"]        
    ];

    include_once('../View/compteView.php');
