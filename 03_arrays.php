<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Arrays</title>
</head>
<body>
<pre>
<?php
    // simple indexed Array
    $numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0]; //int

    $fruits = array('apple', 'orange','banana', 'etc...'); //strings

    // Associative Array
    $employee = array(
        'name' => 'Vinay Kumar',
        'exp' => '7+ years',
    );

    /*
    *arrays have an index to define the position where the element is located, starts counting from zero to.
    */

    //output (php-html):
    echo "<h3>numbers: index zero -- element: {$numbers[0]} </h3>";

    echo "<h3>numbers: index five -- element: {$numbers[5]} </h3>";

    echo "<h3>fruits:  index one  -- element: {$fruits[1]} </h3>";

    echo "<h3>Hi Employee: $employee[name], Experience: $employee[exp]</h3>";

    //output:
    var_dump($numbers);
    var_dump($fruits);
    var_dump($employee);
?>
</pre>
</body>
</html>
