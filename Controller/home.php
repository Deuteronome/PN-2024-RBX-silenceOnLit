<?php
    session_start();
    $title = "Accueil";
    $navList =  [
                    ["label"=>"Détente", "path" => "../Controller/jeux.php"]
                    
                ];
    if(isset($_SESSION['userId'])) {
        $navList[] = ["label"=>"Mon compte", "path" => "../Controller/compte.php"];
    }

    include_once('../View/homeView.php');


