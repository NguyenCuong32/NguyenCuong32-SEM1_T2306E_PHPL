<?php
class Calculator {
    private $result;

    public function __construct() {
        $this->result = 0;
    }

    public function getResult() {
        return $this->result;
    }

    public function add($number) {
        $this->result += $number;
    }

    public function subtract($number) {
        $this->result -= $number;
    }
}

// Example Usage
$calculator = new Calculator();
$calculator->add(5); // Kết quả hiện tại: 5
$calculator->subtract(3); // Kết quả hiện tại: 2
echo "Kết quả cuối cùng là: " . $calculator->getResult(); // Kết quả cuối cùng là: 2
?>