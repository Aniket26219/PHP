<!DOCTYPE html>
<html> 
<body>
<?php
    $a = 24;
    $b = 2.4;
    var_dump(is_float($a));
    echo "<br>";
    var_dump(is_float($b));
    echo "<br>";
    var_dump(is_double($a));
    echo "<br>";
    var_dump(is_double($b));
?>
</body>
</html>
<!-- above three methods is_float() and is_double() are to check whether the given number is integer or not -->
<!-- important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float -->