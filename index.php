<!DOCTYPE html>
<html> 
<body>
<?php
    function test(){
        static $a = 1;
        echo "$a <br>";
        $a++;
    }
    test();
    test();
    test();
?>
</body>
</html>

<!-- normally local variables get deleted after the execution is completed but static variables don't get deleted rather than that it's value is stored. When we again call it the value gets added with the newer one. Like above if we call the test once the value will be one if we call it twice the value will be 2 cuz the first value is not get deleted and when we call it again the value gets added with second and that's why it shows us 2. -->