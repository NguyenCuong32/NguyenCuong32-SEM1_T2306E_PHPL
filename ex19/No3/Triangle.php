<?php 
    include_once("Shape.php");
    class Triangle extends Shape{
        var $height , $base;
        public function __construct($height , $base){
            $this->height = $height;
            $this->base = $base;
        }
        public function CalculateArea(){
            $area= ($this->base*$this->height)/2;
            return $area;
        }
    }
?>