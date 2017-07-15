<?php

require('databases/connect.post.db.php');
include("submissions/post.php");

if(!$_SESSION['firstname']){
	header('Location: index.php');
}

?>