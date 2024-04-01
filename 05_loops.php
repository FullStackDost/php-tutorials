<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Loops</title>
</head>
<body>
<?php

    /**
     *  initialize(i=1); condition(i<=10); and increment(i++)
     *  initialize(i=1); condition(i<=10); and decrement(i--)
     */

    echo "<hr>For loop: ";
    /** For loop **/
    for ($i=1; $i < 10; $i++) {
    var_dump($i);
    }

    echo "<hr>while loop: ";
    /** while loop **/
    $i=1;
    $limit = 10;
    while ($i <= $limit) {
        echo $i;
        $i++; // increment(i++)
    }


    echo "<hr>DoWhile loop: ";
    /**DoWhile loop **/
    $i=1;
    $limit = 10;

    do {
        print($i);
        $i++;//increment(i++)
    } while ($i <= $limit);

    /**foreach loop **/
    echo "<hr>foreach loop, for arrays:<br>";
    $posts = ['first post', 'second post', 'third post'];

    foreach ($posts as $content) {
        var_dump($content);
    }

    echo "<hr>foreach loop, for arrays:<br>";
    /**foreach loop **/
    $posts = ['first post', 'second post', 'third post'];

    foreach ($posts as $index => $content) {
        echo $index+1 . " - " . $content . "<br>";
    }


?>
</body>
</html>
