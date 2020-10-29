<!DOCTYPE html>
<html> 
<body>
<?php
    $a = "Hello";
    $a = null;
    echo "$a<br>";
    var_dump($a);
?>
</body>
</html>
<!-- when we make a variable data type to NULL the value we gave it before making it null will also be gone. For above example we'll get output only null not Hello cuz we have made it null -->