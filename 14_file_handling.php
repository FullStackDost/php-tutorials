<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP File Handling</title>
</head>
<body>
<?php
   /* ----------- File Handling ------------*/

   /**
    * File Handling is the ability to read and write files
    * on the server.
    * PHP has built in functions for reading and writing files.
    **
   */


   //read file
   $file = '14_users.txt';
   if(file_exists($file)){
      // echo(' - '.readfile($file)); //print-output list

      $handle = fopen($file, 'r');
      $contents = fread($handle, filesize($file));
      fclose($handle);
      echo $contents.'<br>';
   }else {
      $handle = fopen($file, 'w');
      $contents = 'Brand'. PHP_EOL .'Vinay' .PHP_EOL . 'Kumar';
      fwrite($handle, $contents);
      fclose($handle);
   }
?>
</body>
</html>

