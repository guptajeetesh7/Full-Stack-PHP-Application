<?php



require('databases/connect.sharepost.php');


if(!$_SESSION['firstname']){
	header('Location: index.php');
}


?>