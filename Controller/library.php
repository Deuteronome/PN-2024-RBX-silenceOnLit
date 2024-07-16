<?php
    session_start();
    include_once('../Model/Model.php');
    
    if(!isset($_GET['siteId'])) {
        header('location: ../Controller/home.php');
    }

    $bdd = new Model();

    $site = $bdd->getSiteById($_GET['siteId']);

    $title = "Site de ". $site['city'];
    $navList =  [
                    ["label"=>"Accueil", "path" => "../Controller/home.php"],
                    ["label"=>"Détente", "path" => "../Controller/jeux.php"]
                ];
    if(isset($_SESSION['userId'])) {
        $navList[] = ["label"=>"Mon compte", "path" => "../Controller/compte.php"];
    }

    $bookList = $bdd->getAllBooks();
    //var_dump($bookList);

    include_once('../View/libraryView.php');
