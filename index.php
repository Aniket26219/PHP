<!DOCTYPE html>
<html> 
<body>
<?php
    class Candidates{
        public $name;
        public $email;
        public $mobno;
        public $location;
        public function __construct($nme, $emal, $mobileno, $loc){
            $this->name = $nme;
            $this->email = $emal;
            $this->mobno = $mobileno;
            $this->location = $loc;
        }
        public function show(){
            return "Candidate Name :- " . $this->name . " <br>Candidate Email :- " . $this->email . "<br>Candidate Mobile NO :- " . $this->mobno . "<br>Candidate's Current Location :- " . $this->location;
        }
    }
    $Aniket = new Candidates("Aniket", "aniketsample@gmail.com", 9999999999, "Nanded");
    echo $Aniket -> show();
    echo "<br>";
    $Sagar = new Candidates("Sagar", "sagarsample@gmail.com", 9999999999, "Pune");
    echo $Sagar -> show();
?>
</body>
</html>