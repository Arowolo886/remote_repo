<?php
  $host = 'localhost';
  $user = 'root';
  $pass = 'mypass';
  $db = 'mydbname';
 $connect =  mysqli_connect($host, $user, $pass, $db);

  if($connect){
    echo "Connection Successfull";
  } else{
      echo "Connection Failed".mysqli_error($connect);
  }

?>
