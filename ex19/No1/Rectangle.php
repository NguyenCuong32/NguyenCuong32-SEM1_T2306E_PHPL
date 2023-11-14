<?php
    // tạo class hình chữ nhật có thuộc tính dài , rộng ; tính chu vi , diện tích

    class Rectangle{
        var $lenght,$width;

        public function set_lenght($value){
            $this->lenght = $value;
        }
        public function set_width($value){
             $this->width=$value;
        }
        public function get_lenght(){
            return $this->lenght;
        }
        public function get_width(){
            return $this->width;
        }
        public function area(){
            $area= $this->get_lenght() * $this->get_width();
            return $area;
        }
        public function perimeter(){
            $perimeter=2*($this->get_lenght() + $this->get_width());
            return $perimeter;
        }
    }
?>