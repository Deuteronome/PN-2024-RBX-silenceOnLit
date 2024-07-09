<?php
    $title = "Accueil";
    $navList =  [
                    ["label"=>"Détente", "path" => "../Controller/jeux.php"],
                    ["label"=>"Mon compte", "path" => "../Controller/compte.php?nom='Olivier'&age=35"]
                ];

    include_once('../View/homeView.php');


