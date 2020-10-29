<!DOCTYPE html>
<html> 
<body>
<?php
    $a = 10;
    $b = 20;
    function test(){
        // global $a, $b;
        // $b = $a + $b;
        $GLOBAL['b'] = $GLOBAL['a'] + $GLOBAL['b']; //another approach
    }
    test();
    echo "$b from another approach";
    //From this I have understanded that if we do any operation on the global variables in a function it will affect it out of it's local scope only when we call that function otherwise it will not affect it. If we don't call the function the the value will be 20 and if we call then the value will be 30.
?>
</body>
</html>