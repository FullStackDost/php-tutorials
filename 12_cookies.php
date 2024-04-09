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
  // Set a cookie named "username" with the value "John" that expires in 1 hour
  setcookie("username", "John", time() + 3600, "/");
  //(86400)--1day * n--nr of days = n.days: 86400 * 30

  if (isset($_COOKIE['username'])){ echo $_COOKIE['username']; } 

  // setcookie('username', '', time() - 86400);

?>