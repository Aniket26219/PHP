<!DOCTYPE html>
<html> 
<body>
<?php
    $a = 2.3e821;
    var_dump($a);
    $b = 2.4e123;
    var_dump($b);
?>
</body>
</html>
<!-- the output will show either INF means infinite otherwise the float number -->
<!-- important thing to know is that even if 4 * 2.5 is 10, the result is stored as float, because one of the operands is a float -->