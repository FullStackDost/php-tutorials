<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Functions</title>
</head>
<body>
<?php
    /* PHP Functions:
        A function is a block of statements that can be used repeatedly in a program.
        A function will not execute automatically when a page loads.
        A function will be executed by a call to the function.
    */

    // function register user
    function registerUser()
    {
        echo "User registered !!! <br>";
    }
    registerUser(); //using the function

    // sum function
    function sum($x, $y)
    {
        return 'sum result:' . ($x + $y);
    }
    sum(1, 2); //using the function



    // Arrow functions have the basic form fn (argument_list) => expr.
    // sum result variable
    $result = 0;
    // // Arrow functions.
    $result = fn($n1, $n2) => $n1 + $n2;
    echo "result>>" . $result(1,2);
?>

</body>
</html>
