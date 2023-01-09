<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
</body>

<?php

// Definizione della classe Movie
class Movie {
  // Dichiarazione delle variabili d'istanza
  public $title;
  public $year;
  public $genre;

  // Costruttore della classe Movie
  public function __construct($title, $year, $genre) {
    $this->title = $title;
    $this->year = $year;
    $this->genre = $genre;
  }

  // Metodo della classe Movie
  public function getDescription() {
    return "Il film '$this->title' è stato prodotto nel $this->year e appartiene al genere $this->genre.";
  }
}

// Istanziazione di due oggetti "Movie"
$movie1 = new Movie("italian-spiderman", 1989, "commedia-delirante");
$movie2 = new Movie("avatar-la via della noia", 2022, "sci-fi-noioso");

// Stampa a schermo dei valori delle proprietà dei due oggetti "Movie"
echo $movie1->getDescription() . "<br>";
echo $movie2->getDescription() . "<br>";

?>
</html>