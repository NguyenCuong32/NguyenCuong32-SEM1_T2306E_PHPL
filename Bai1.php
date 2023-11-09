<?php
class Rectangle {
  private $length;
  private $width;

  public function __construct($length, $width) {
    $this->length = $length;
    $this->width = $width;
  }

  public function calculateArea() {
    return $this->length * $this->width;
  }

  public function calculatePerimeter() {
    return 2 * ($this->length + $this->width);
  }
}

// Example usage:
$rectangle = new Rectangle(5, 10);
$area = $rectangle->calculateArea();
$perimeter = $rectangle->calculatePerimeter();

echo "Area: " . $area . ", Perimeter: " . $perimeter;
?>