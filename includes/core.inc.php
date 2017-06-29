<?php

session_start();

require('includes/databases/connect.db.php');
require('includes/submissions/create.php');
require('includes/submissions/login.php');

if(loggedin())

{
	header('Location: home.php');
}



 

?>