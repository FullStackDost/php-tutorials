<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP Page</title>
</head>
<body>
<?php
    /**
     * SECURITY INPUTS
     */
    if (isset($_POST['submit'])) {
        // 1 option:
        $name = htmlspecialchars($_POST['name']);
        $age = htmlspecialchars($_POST['age']);
        
        // 2 option:
        $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        echo $name;
        echo $age;
    }
?>


<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div>
        <label for="name">Name: </label><input type="text" name="name"  required></input>
    </div>
    <div>
        <label for="age">age: </label><input type="number" name="age" required></input>
    </div>
    <div>
    <input type="submit" value="submit" name="submit">
    </div>
</form>

</body>
</html>
