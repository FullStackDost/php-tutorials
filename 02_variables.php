
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Variables</title>
</head>
<body>
<?php
    /**
     * In PHP, a variable starts with the $ sign, followed by the name of the variable:
     *
     */

    $name = "juliao LB"; //string
    $age = 5; //int
    $height = 10.5; //float
    $status = false; //boll

    //output:
    echo "name: $name, age: $age, height: $height, status: $status";
    var_dump($name);


    //PHP Operators

    /* Arithmetic operators
    */
    $num1 = 2;
    $num2 = 3;
    echo "Sum of $num1 and $num2: " . ($num1 + $num2) . "<br>"; //(+ Sum of $num1 and $num2)
    echo "Difference of $num1 and $num2: " . ($num1 - $num2) . "<br>"; //(- Difference of $num1 and $num2)
    echo "Quotient of $num1 and $num2: " . ($num1 / $num2) . "<br>"; //(/ Quotient of $num1 and $num2)
    echo "Product of $num1 and $num2: " . ($num1 * $num2) . "<br>"; //(* Product of $num1 and $num2)
    echo "(Modulus) Remainder of $num1 divided by $num2: " .
            ($num1 % $num2) . "<br>"; //(% Remainder of $num1 divided by $num2)
    //(** Result of raising $num1 to the $num2'th power)
    echo "Result of raising $num1 to the $num2'th power" . ($num1 ** $num2) . "<br>";
?>
</body>
</html>


