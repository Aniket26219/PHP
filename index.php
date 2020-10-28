<!DOCTYPE html>
<html> 
<body>
<?php
    $txt = "Sample text";
    function test(){
        echo "Some $txt"; 
        //This one is not showing in output cuz it is in local scope which does not accept global variables it only accepts local variables
    }
    test();
    echo "Some $txt"
    //This one will be shown on in the output cuz it is in global scope which accepts only global variables
    //From current understanding of mine says that global variables are accepted only in global scopes only and local variables accepted by local scope only.
?>
</body>
</html>