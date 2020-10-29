<!DOCTYPE html>
<html> 
<body>
<?php
    class Mobiles{
        public $brand;
        public $price;
        public function __construct($br, $pr){
            $this->brand = $br;
            $this->price = $pr;
        }
        public function show(){
            return "Mobile Company is " . $this->brand . " and price is " . $this->price;
        }
    }
    $iphone = new Mobiles("Iphone" , 80000);
    echo $iphone -> show();
    echo "<br>";
    $blackberry = new Mobiles("BlackBerry" , 50000);
    echo $blackberry -> show();
?>
</body>
</html>