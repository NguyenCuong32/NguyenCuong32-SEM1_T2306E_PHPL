<?php
class Math {
    public static function add($a, $b) {
        return $a + $b;
    }

    public static function subtract($a, $b) {
        return $a - $b;
    }

    public static function multiply($a, $b) {
        return $a * $b;
    }
}

// Sử dụng các phương thức
echo Math::add(5, 3); // Kết quả: 8
echo Math::subtract(10, 4); // Kết quả: 6
echo Math::multiply(2, 5); // Kết quả: 10
?>