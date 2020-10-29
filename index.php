<!DOCTYPE html>
<html> 
<body>
<?php
    function test(){
        $txt = "Sample text";
        echo "Some $txt <br>"; 
        //This one is going to show output cuz the variables is declared in local scope we are able access the local variables in local scope
    }
    test();
    echo "Some $txt"
    //This one will not show the variable cuz it is global scope which not accepts local scope
    //From current understanding of mine says that global variables are accepted only in global scopes only and local variables accepted by local scope only.
?>
</body>
</html>