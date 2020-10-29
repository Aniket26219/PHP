<!DOCTYPE html>
<html> 
<body>
<?php
    $a = 423.3;
    $n = "3243.24";
    $an = 32.4;
    $a_cast = (int)$a;
    $n_cast = (integer)$n;
    $an_cast = intval($an);
    echo $a_cast;
    echo "<br>";
    echo $n_cast;
    echo "<br>";
    echo $an_cast;
?>
</body>
</html>
<!-- Don't give the _cast for variable it's only for my convineance. If we have to cast into integer just put (int)$--/(integer)$-- or intval($--) replace -- the variable to cast -->