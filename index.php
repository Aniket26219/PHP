<!DOCTYPE html>
<html> 
<body>
<?php
    $a = 24;
    var_dump(is_int($a));
    echo "<br>";
    var_dump(is_integer($a));
    echo "<br>";
    var_dump(is_long($a))
?>
</body>
</html>
<!-- above three methods is_int(), is_integer() and is_long() all are to check whether the given number is integer or not -->
<!-- important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float -->