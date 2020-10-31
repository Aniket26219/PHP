<!DOCTYPE html>
<html> 
<body>
<?php
    echo "First code is for Understanding<br><br>";
    $colors = array("red", "green", "blue", "yellow");
    
    foreach ($colors as $value) {
        echo "$value <br>";
}

    echo "<br><br>This code is to understand in more better way<br><br>";
    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    foreach($age as $x => $val) {
    echo "$x = $val<br>";
}
?>
</body>
</html>