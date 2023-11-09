<?php
interface Resizable {
  public function resize($scaleFactor);
}

class Square implements Resizable {
  private $sideLength;

  public function __construct($sideLength) {
    $this->sideLength = $sideLength;
  }

  public function resize($scaleFactor) {
    $this->sideLength = $this->sideLength * $scaleFactor;
  }

  public function getArea() {
    return pow($this->sideLength, 2);
  }

  public function getPerimeter() {
    return 4 * $this->sideLength;
  }
}

// Example usage:
$square = new Square(5);
echo "Area before resizing: " . $square->getArea() . ", Perimeter before resizing: " . $square->getPerimeter() . "<br>";

$square->resize(1.5);
echo "Area after resizing: " . $square->getArea() . ", Perimeter after resizing: " . $square->getPerimeter();
?>