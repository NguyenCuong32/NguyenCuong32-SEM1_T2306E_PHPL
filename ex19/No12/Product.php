<?php 
        require_once "ITF_Comparable.php";
        class Product implements ITF_Comparable
        {
            protected $name;
            protected $price;
    
            public function __construct($name, $price)
            {
                $this->name = $name;
                $this->price = $price;
            }
    
            public function getName()
            {
                return $this->name;
            }
    
            public function getPrice()
            {
                return $this->price;
            }
    
            public function compare($Product) // so sanh
            {
                if ($this->price > $Product->price) 
                {
                    return "'{$this->name}' dat hon '{$Product->getName()}'";
                }
                else if ($this->price < $Product->price)
                {
                    return "'{$this->name}' re hon '{$Product->getName()}'";
                }
                else 
                {
                    return "'{$this->name}' bang '{$Product->getName()}'";
                }
            }
        }
    
        $product1 = new Product("Iphone", 1990.99);
        $product2 = new Product("SamSung", 800);
    
        echo $product1->compare($product2);
?>