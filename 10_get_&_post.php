<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP GET &amp; POST</title>
</head>
<body>

<?php
    /**
     * GET and POST php
     * $_GET and $_POST are Super-Global variables in PHP which used to
     * collect data from HTML form and URL.
     */

    if (isset($_POST['submit'])) {
        echo 'Name: '.$_POST['name'].'<br>';
        echo 'Age  : '.$_POST['age'].'<hr>';
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
            <label for="name">Name: </label><input type="text" name="name"  required></input>
        </div>
        <div>
            <labelb for="age">age: </label><input type="number" name="age" required></input>
        </div>
        <div>
        <input type="submit" value="submit" name="submit"
        >
        </div>
    </form>

</body>
</html>
