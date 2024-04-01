<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
<?php
    //Sessions:
    session_start();

    if(isset($_SESSION['username'])){
        echo'<h1> Welcome ' .$_SESSION['username'] . '</h1> </br>';
        echo'<h1>' .$_SESSION['username'] . '</h1> </br> <hr> <a href="13.2_logout.php"> - homepage </a>'; 

    }else{
        echo'<br> <a href="13.2_logout.php"> - Logout </a> ';
    }
?>
</body>
</html>
