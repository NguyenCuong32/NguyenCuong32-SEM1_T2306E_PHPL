<?php
class ShoppingCart {
    public $items;
    public $total;

    public function __construct() {
        $this->items = [];
        $this->total = 0;
    }

    public function addItem($itemName, $itemPrice) {
        $this->items[] = array('name' => $itemName, 'price' => $itemPrice);
    }

    public function calculateTotalCost() {
        $this->total = 0;
        foreach ($this->items as $item) {
            $this->total += $item['price'];
        }
        return $this->total;
    }
}

// Sử dụng
$cart = new ShoppingCart();
$cart->addItem('Product 1', 50);
$cart->addItem('Product 2', 100);
$totalCost = $cart->calculateTotalCost();
echo "Tổng chi phí là: " . $totalCost;
?>