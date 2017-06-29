<?php

session_start();




include('databases/connect.db.php');
include('submissions/create.php');

if(loggedin())

{
  echo "<script type='text/javascript'>alert('Session worked');</script>";

  header('Location: home.php');
}else{
   
   $name = $_SESSION['firstname'];

   echo "<script type='text/javascript'>alert('$name');</script>";


}
require('includes/submissions/login.php');




 

?>