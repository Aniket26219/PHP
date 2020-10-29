<!DOCTYPE html>
<html> 
<body>
<?php
    class Candidates{
        public $name;
        public $location;
        public function __construct($name, $location){
            $this->name = $name;
            $this->location = $location;
        }
        public function show(){
            return "Candidate's Name :- " . $this->name . "<br>Candidate's Current Location :- " . $this->location;
        }
    }
    $newCandidates = new Candidates("Aniket", "Nanded");
    echo $newCandidates -> show();
    echo "<br>";
    $newCandidates = new Candidates("Sagar", "Pune");
    echo $newCandidates -> show();
?>
</body>
</html>