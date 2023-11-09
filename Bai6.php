<?php
class LibraryItem {
  protected $title;
  protected $author;
  protected $year;

  public function __construct($title, $author, $year) {
    $this->title = $title;
    $this->author = $author;
    $this->year = $year;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getAuthor() {
    return $this->author;
  }

  public function getYear() {
    return $this->year;
  }
}

class Book extends LibraryItem {
  protected $genre;

  public function __construct($title, $author, $year, $genre) {
    parent::__construct($title, $author, $year);
    $this->genre = $genre;
  }

  public function getGenre() {
    return $this->genre;
  }
}

class DVD extends LibraryItem {
  protected $duration;

  public function __construct($title, $author, $year, $duration) {
    parent::__construct($title, $author, $year);
    $this->duration = $duration;
  }

  public function getDuration() {
    return $this->duration;
  }
}

// Example usage:
$book = new Book("Đắc Nhân Tâm", "Dale Carnegie", 1936, "Self-help");
echo "Title: " . $book->getTitle() . "<br>";
echo "Author: " . $book->getAuthor() . "<br>";
echo "Year: " . $book->getYear() . "<br>";
echo "Genre: " . $book->getGenre() . "<br>";

$dvd = new DVD("Inception", "Christopher Nolan", 2010, "2 hours 28 minutes");
echo "Title: " . $dvd->getTitle() . "<br>";
echo "Author: " . $dvd->getAuthor() . "<br>";
echo "Year: " . $dvd->getYear() . "<br>";
echo "Duration: " . $dvd->getDuration() . "<br>";
?>