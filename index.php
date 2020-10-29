<!DOCTYPE html>
<html> 
<body>
<?php
    $a = 34 + 10;
    var_dump(is_numeric($a));
    echo "<br>";
    $n = "83";
    var_dump(is_numeric($n));
    echo "<br>";
    $an = "23.98" + 32;
    var_dump(is_numeric($an));
    echo "<br>";
    $na = "Sample text";
    var_dump(is_numeric($na));
?>
</body>
</html>
<!-- from above we can say that if the value is completely text then it will return false and for above other cases it'll return true -->