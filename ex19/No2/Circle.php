<?php 
    class Circle{
        var $radius;
        public function set_radius($value){
            $this->radius = $value;
        }
        function get_radius(){
            return $this->radius;
        }
        function area(){
            $area= pi()*pow($this->get_radius(),2);
            return $area;
        }
        function parameter(){
            $parameter= pi()*2*$this->get_radius();
            return $parameter;
        }
    }
?>