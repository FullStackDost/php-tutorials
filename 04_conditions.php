<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Conditions</title>
</head>
<body>
<?php

    /**
     * PHP Comparison Operators
     * (==) --  Equal.      | (<) -- Less than.
     * (===) -- Identical.  | (>) -- Greater than
     * (!=) --  Not equal.  | (>=) -- Greater than or equal to
     * (<>) --  Not equal.  | (<=) -- Less than or equal to
     * (!==) -- Not identical| (<=>) -- Spaceship
     *
     */
    // age variable.:
    $age = 0; //age
    $name = "Vinay"; //name
    $x = "Vinay"; //name
    echo "<h2> Name: {$name}<h2>";
    echo "<h3> Age: {$age} </h3>";

    // making conditions.:
    if ($age >= 18) {
        echo "<p> you are old enough to vote.</p>";
    } elseif ($age < 17 && $age > 12) {
        echo "<p> you are not old enough to vote.</p>";
    } else {
        echo "<p> go play baby.</p>";
    }

    /*PHP Logical Operators:
    (and)-- "And" -> ($x and $y) { True if both $x and $y are true. }
    (or) --	"Or"  -> ($x or $y)  { True if either $x or $y is true. }
    (xor)--	"Xor" -> ($x xor $y) { True if either $x or $y is true, but not both}
    (&&) -- "And" -> ($x && $y)  { True if both $x and $y are true. }
    (||) --	"Or"  -> ($x || $y)  { True if either $x or $y is true. .}
    (!)  -- "Not" -> (!$x)       { True if $x is not true. }
    */

    // age variable.:
    $age = 18;
    echo "<hr><h3> Name: {$name}<h3>";
    echo "<h3> Age: {$age} </h3>";

    // making conditions.:
    if (($age > 18) || ($age == 18)) {
        echo "<p> you are old enough to vote.</p>";
    }

    if ($name == "Vinay " && $name == $x) {
        echo "<p> Welcome Mr Vinay. </p>";
    } elseif ($name != "Vinay" and $x != $name) {
        echo "<p> Sorry you aren't Mr Vinay.</p>";
    }


    // switch:

    $favColor = $_GET['color'];

    switch ($favColor) {
        case 'red':
            echo 'your favorite color is red';
            break;
        case 'blue':
            echo 'your favorite color is blue';
            break;
        case 'green':
            echo 'your favorite color is green';
            break;
        default:
            echo 'No Match Found';
    }
?>
</body>
</html>
