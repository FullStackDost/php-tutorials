<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Array Functions</title>
</head>
<body>
<?php 
    /*
    * The array functions allow you to access and manipulate arrays. Simple and multi-dimensional arrays are supported.
    * more on the link: https://www.fullstackdost.com/course/php-tutorial/
    */

    $fruits = ['apple', 'orange', 'pear'];

    // Get length
    echo "<hr>fruit array length: ". count($fruits);

    //search array
    var_dump('<hr> search array:' . in_array('apple', $fruits) .'<hr>');

    //add to array
    $fruits[] = 'grape';
    array_push($fruits, 'mango');

    //remove from array
    array_pop($fruits);
    array_shift($fruits);

    //split into 2 chunks
    $chunked_array = array_chunk($fruits, 2);

    //print
    print_r($fruits);

    //number
    echo "<hr>";
    $arr1 = [1,2,3];
    $arr2 = [4,5,6];
    $arr3 = array_merge($arr1, $arr2);
    print_r($arr3);


    echo "<hr>";
    $a= ['green', 'red', 'yellow'];
    $b= ["dragon-fruit", "apple", "banana"];
    $c = array_combine($a, $b);
    print_r($c);

    echo "<hr>";
    $keys = array_keys($c);
    print_r($keys);

    echo "<hr>";
    $flipped = array_flip($c);
    print_r($flipped);


    echo "<hr>";
    $numbers = range(1,20);
    print_r($numbers);


    echo "<hr>";
    $newNumbers = array_map(function($number) {
        return "Number: $number";
    }, $numbers);
    print_r($newNumbers);

    /**
     * more on the link: https://www.fullstackdost.com/course/php-tutorial/
    */
?>
</body>
</html>
