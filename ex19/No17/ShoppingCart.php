<?php
    class ShoppingCart
    {
        protected $items;
        protected $total;

        public function __construct()
        {
            $this->items = []; 
            $this->total = 0;
        }

        public function addItem($itemName, $price, $quantity)
        {
            //kiểm tra số lượng
            if ($quantity < 0)
            {
                echo "vui long nhap so luong";
            } 
            // kiểm tra sp xem có trong rỏ hàng chưa 
            else if (isset($this->items[$itemName]))
            {
                $this->items[$itemName] += $quantity; // thêm vào rỏ hàng
            }
            else // nếu không có tên trong rỏ hàng thì 
            {
                $this->items[$itemName] = [
                    "price"=> $price,
                    "quantity"=> $quantity
                ];
            }
            echo $itemName." ";
            echo $price."đ";
            echo"*";
            echo $quantity."<br>";
            $this->total += $price * $quantity;
        }

        public function getTotal()
        {
            return $this->total;
        }
    }

    $cart = new ShoppingCart();
    $cart->addItem("kem",2000,4);
    $cart->addItem("Bia",10000,10);
    $cart->addItem("coca",10000,5);
    echo "Tổng tiền là : " . $cart->getTotal();
?>
