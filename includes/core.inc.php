<?php

session_start();



require('databases/connect.db.php');
require('submissions/create.php');
require('submissions/login.php');

if(loggedin())

{
	header('Location: home.php');
}

 

?>