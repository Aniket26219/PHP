<!DOCTYPE html>
<html> 
<body>
<?php
for ($x = 0; $x < 10; $x++) {
    if ($x == 4) {
    continue;
    }
    echo "The number is: $x <br>";
}
?>
</body>
</html>
<!-- when the specified condition or conditions match it will skip that from an iteration for above example value 4 will be skipped. -->