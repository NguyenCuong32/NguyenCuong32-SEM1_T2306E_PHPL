<?php
class Circle {
  private $radius;

  public function __construct($radius) {
    $this->radius = $radius;
  }

  public function getArea() {
    return pi() * pow($this->radius, 2);
  }
  
  public function getCircumference() {
    return 2 * pi() * $this->radius;
  }
}

// Sử dụng lớp Circle
$circle = new Circle(5);
$area = $circle->getArea();
$circumference = $circle->getCircumference();

echo "Diện tích của hình tròn là: " . $area . "<br>";
echo "Chu vi của hình tròn là: " . $circumference;
?>