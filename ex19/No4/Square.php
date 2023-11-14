<?php   
    class Square implements Resizable{
        public $A=1;
        public function resize(){
            $result = $this->A + 2;
            return $result;
        }
    }
?>