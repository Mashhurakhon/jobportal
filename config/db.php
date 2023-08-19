<?php 

  $host = "localhost";
  $user = "root";
  $password='';
  $database = "employment";
  $mysqli = new mysqli($host,$user,$password,$database);// connect to db
  mysqli_set_charset($mysqli, "utf8");
  // echo mysqli_character_set_name($mysqli);
  
  if ($mysqli -> connect_errno) {
    echo "Ошибка подкл: " . $mysqli -> connect_error; // error message
    exit();
  }

?>