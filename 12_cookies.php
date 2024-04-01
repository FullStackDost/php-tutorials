<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic PHP Page</title>
</head>
<body>
<?php
  /**-------COOKIES------- */

  /*
  Cookies are a mechanism for storing data in the client - browser
  and thus tracking or identifying return  users.
  you can set specific data to be stored in the browser,and
  then retrieve it when the user visits the site again.
  */

  //set cookie
  //storing name
  setcookie('name', 'Brad', time() + 86400 * 30);
  //(86400)--1day * n--nr of days = n.days: 86400 * 30

  if (isset($_COOKIE['name'])){ echo $_COOKIE['name'];}

  setcookie('name', '', time() - 86400);

?>

</body>
</html>

