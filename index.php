<!DOCTYPE html>
<html> 
<body>
<?php
$favcolor = "orange";

switch ($favcolor) {
    case "red":
    echo "Your favorite color is $favcolor!";
    break;
    case "blue":
    echo "Your favorite color is $favcolor!";
    break;
    case "green":
    echo "Your favorite color is $favcolor!";
    break;
    default:
    echo "Your favorite color is neither red, blue, nor green but it is $favcolor!";
}
?>
</body>
</html>