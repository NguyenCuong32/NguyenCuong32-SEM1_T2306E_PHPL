<?php 
    include_once("Shape.php");
    class Rectangle extends Shape{
        var $width,$length;
        public function __construct($width,$length){
            $this->width=$width;
            $this->length=$length;
        }
        public function CalculateArea()
        {
            $area= $this->width*$this->length;
            return $area;
        }
    }
?>