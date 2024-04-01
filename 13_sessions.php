<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Sessions</title>
</head>
<body>
<?php
/*
 Sessions are a way to store information ( in variables ) to be used across multiple pages.
 Unlike cookies , sessions are stored on the server.
*/

//Sessions: 
session_start();

if(isset($_POST['submit'])){
    $username= filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS );
    $password = $_POST['password'];

    if ($username=='john' && $password=='password') {
        $_SESSION['username'] = $username;
        header('Location: /13.1_dashboard.php');
    } else{
        echo'incorrect login <hr></br>';
    }

}
?>
    <!--Form-->
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST"> 
        
        <div class="username">
            <label for="username">username: </label><input type="text" name="username"  required></input>
        </div>
    
        <div  class="password">
            <labelb for="password">password: </label><input type="text" name="password" required></input>
        </div>
        
        <input type="submit" value="Login" name="submit">
    </form>
    <!-- end form-->
</body>
</html>
