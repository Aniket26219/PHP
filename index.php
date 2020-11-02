<!DOCTYPE html>
<html> 
<body>
<?php
function sum(&$val) {
    $val += 10;
}
$n = 10;
sum($n);
echo $n;
?>
</body>
</html>
<!-- To turn a function argument which $val into a reference which is $n we are passing to the sum function, the & operator is used -->