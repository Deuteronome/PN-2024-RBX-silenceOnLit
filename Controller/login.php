<?php
    include_once('../Model/Model.php');

    $identifier = htmlspecialchars($_POST['identifiant']);
    $password = htmlspecialchars($_POST['password']);

    $bdd = new Model();

    

