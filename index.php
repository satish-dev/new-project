<?php 
    class A 
    {
        public $num1=10; 
        public $num2=20;
        public function sum()
        {
            return $this->num1+ $this->num2;
        }
    }
    $obj = new A();
    echo "Sum of $obj->num1 and $obj->num2 is ". $obj->sum()."<br/>";
?>