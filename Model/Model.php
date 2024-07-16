<?php

class Model 
{
    private PDO $bdd;

    public function __construct()
    {
      try {
        $this->bdd = new PDO('mysql:host=localhost;dbname=books_e2c;charset=utf8','book_user','3kEW22Fe6rYzz5');
      }catch(Exception $e) {
        die($e->getMessage());
      }   

    }

    public function findUserByIdentifier(string $identifier) {
        $sqlQuery = "SELECT id, firstname, lastname, password FROM Users WHERE email= :identifier";
        $statement =  $this->bdd->prepare($sqlQuery);
        $statement->execute([
            'identifier' => $identifier
        ]);
        $req = $statement -> fetch();

        return $req;
    }

    public function getSiteById(int $id) {
      $sqlQuery = "SELECT id, city FROM Sites WHERE id= :id";
      $statement =  $this->bdd->prepare($sqlQuery);
      $statement->execute([
        'id' => $id
      ]);
      $req = $statement -> fetch();

      return $req;
    }

    public function getAllBooks () {
      $sqlQuery = "SELECT * FROM book_list_vw";
      $statement =  $this->bdd->prepare($sqlQuery);
      $statement->execute([]);
      $req = $statement -> fetchAll();

      return $req;
    }
    
}