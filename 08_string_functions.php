<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP String Functions</title>
</head>
<body>
<?php
    /**
     * PHP Strings can be declared with two syntaxes 
     * 1. Single quotes
     * 2. Double quotes
     * And lets know the difference between them
     */
    $var1 = 123; 
    $string1 = 'Single quoted string $var1'; 
    echo $string1; // output: Single quoted string $var1 
    $string2 = "Double quoted string $var1"; 
    echo $string2; // output: Double quoted string 123 
    
    /**
     * The PHP string functions are part of the PHP core.
     * No installation is required to use these functions.
     * more on the link: https://www.fullstackdost.com/course/php-tutorial/
     *
     */

    $string = ' Hello World !!!';

    // get the length of a string
    echo strlen($string);
    echo '<br>';


    // find the position of the first occurrence of a substring in a string
    echo strpos($string, 'o');
    echo '<br>';

    // find the position of the last occurrence of a substring in a string
    echo strrpos($string, 'o');
    echo '<br>';

    // Reverse a string
    echo strrev($string);
    echo '<br>';

    // covert all characters to lowercase
    echo strtolower($string);
    echo '<br>';

    // covert all characters to uppercase
    echo strtoupper($string);
    echo '<br>';

    // uppercase the first character of each word
    echo ucwords($string);
    echo '<br>';


    // uppercase the first character of each word 
    echo str_replace('World', 'Everyone', $string);
    echo '<br>';

    /*
    * more on the link: https://www.fullstackdost.com/course/php-tutorial/
    */

?>
</body>
</html>

