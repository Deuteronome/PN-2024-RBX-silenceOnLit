<?php
    $title = "Accueil";
    $navList =  [
                    ["label"=>"Détente", "path" => "../Controller/jeux.php"],
                    ["label"=>"Mon compte", "path" => "../Controller/compte.php"]
                ];

    include_once('../View/homeView.php');


