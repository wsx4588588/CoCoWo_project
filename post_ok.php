<?php
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  input ok!<br>
  <a href="post_space_input.php">test again!</a><br>
  <?php
     echo $_SESSION["mem_name"].'<br>';
     echo $_SESSION["this_spa_no"].'<br>';
     echo $_SESSION["ck1"];
   ?>
</body>
</html>
