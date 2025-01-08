<?php

class Model 
{
    private PDO $bdd;

    public function __construct()
    {
      try {
        $this->bdd = new PDO('mysql:host=localhost;dbname=books_e2c;charset=utf8','book_user','H80x4c!ErM1CaSm_');
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

    public function getBookById(int $id) {
      $sqlQuery = "SELECT Books.title, Books.publishing_house AS edition, DATE_FORMAT(Books.published_at, '%Y') AS date, Books.format, Books.pages, Books.synopsis, Books.picture, Books.borrower_id AS loan, Authors.name AS author, Genres.name AS genre FROM Books
      INNER JOIN Genres ON Books.genre_id = Genres.id
      INNER JOIN Books_authors ON Books.id = Books_authors.book_id
      INNER JOIN Authors ON Authors.id = Books_authors.author_id
      WHERE Books.id = :id";
      $statement =  $this->bdd->prepare($sqlQuery);
      $statement->execute([
        'id' => $id
      ]);
      $req = $statement -> fetch();

      return $req;
    }
    
}