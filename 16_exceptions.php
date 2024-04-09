<?php
/* A exceptions can be thrown, and caught("catches") within PHP.
 Code may be surrounded in a try block to facilitates the catching of 
 potential exception. Each try must have at least one corresponding
 catch or finally block.
*/

//
function inverse($x) {
    if(!$x) {
        //throw Exception
        throw new Exception('Division by zero');
    }
    return 1/$x;
}


try {
    //code...
    echo inverse(5);
    echo inverse(0);
} catch (Exception $e) {
    //throw $th;
    echo 'Caught Exception ', $e->getMessage(), ' '.'<br>';
}finally{
    echo 'Second Finally <br>';
}


try {
    //code...
    echo inverse(0);
} catch (Exception $e) {
    echo 'Caught Exception ', $e->getMessage(), ' '.'<br>';
}finally{
    echo 'Second Finally <br>';
}

?>