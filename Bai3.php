<?php
abstract class Shape {
    abstract public function calculateArea();
}

class Triangle extends Shape {
    private $base;
    private $height;

    public function __construct($base, $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function calculateArea() {
        return 0.5 * $this->base * $this->height;
    }
}

class Rectangle extends Shape {
    private $length;
    private $width;

    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }

    public function calculateArea() {
        return $this->length * $this->width;
    }
}

// Sử dụng
$triangle = new Triangle(3, 4);
echo "Diện tích của tam giác: " . $triangle->calculateArea(); // Kết quả: 6
echo "<br>";

$rectangle = new Rectangle(5, 6);
echo "Diện tích của hình chữ nhật: " . $rectangle->calculateArea(); // Kết quả: 30
?>
