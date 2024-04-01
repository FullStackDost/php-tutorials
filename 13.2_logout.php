<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP Page</title>
</head>
<body>
<?php
    // start Sessions:
    session_start();

    // destroy Sessions:
    session_destroy();

    // redirect to homepage(13_sessions.php)
    header('Location: /13_sessions.php');

?>

</body>
</html>
