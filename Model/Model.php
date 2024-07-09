<?php

class Model 
{
    private PDO $bdd;

    public function __construct()
    {
        $this->bdd = new PDO('mysql:host=localhost;dbname=books_e2c;charset=utf8','book_user','3kEW22Fe6rYzz5');
        var_dump($this->bdd);
    }
    
}