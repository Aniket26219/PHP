<!DOCTYPE html>
<html> 
<body>
<?php
    class Laptops{
        public $company;
        public $price;
        public function __construct($comp, $pr){
            $this->company = $comp;
            $this->price = $pr;
        }
        public function show(){
            return "Laptop company is " . $this->company . " and Laptop price is " . $this->price;
        }
    }
    $del = new Laptops("Dell", 25000);
    echo $del -> show();
    echo "<br>";
    $hp = new Laptops("HP" , 30000);
    echo $hp -> show();

?>
</body>
</html>