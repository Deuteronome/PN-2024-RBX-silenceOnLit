<?php
    if(!isset($_GET['site'])) {
        header('location: ../Controller/home.php');
    }
    $title = "Site de ". $_GET['site'];
    $navList =  [
                    ["label"=>"Accueil", "path" => "../Controller/home.php"],
                    ["label"=>"Détente", "path" => "../Controller/jeux.php"],
                    ["label"=>"Mon compte", "path" => "../Controller/compte.php"]
                ];

    include_once('../View/libraryView.php');
