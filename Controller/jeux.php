<?php
    session_start();
    
    $title = "L'éclate totale!";
    $navList =  [
                    ["label"=>"Accueil", "path" => "../Controller/home.php"],
                    
                ];
    if(isset($_SESSION['userId'])) {
        $navList[] = ["label"=>"Mon compte", "path" => "../Controller/compte.php"];
    }
    
    include_once('../View/jeuxView.php');


