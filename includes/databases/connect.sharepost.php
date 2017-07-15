<?php



$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$db_name = 'login';

$feedback =array();

$db_user_table = $_SESSION['firstname'];

if($connection = mysql_connect($db_host, $db_user, $db_pass)){

		$feedback[] = 'Connected to Database Sever ... <br>';

		$query = "CREATE DATABASE login";

		if($query_run = mysql_query($query)){

				$feedback[] = "Database Created ...<br>";
		}


		if(mysql_select_db($db_name)){

			$feedback[] = "Database Selected ..<br>";

			$query = 'CREATE TABLE `'.$db_user_table.'` ( `id` INT NOT NULL AUTO_INCREMENT , `person` VARCHAR(30) NOT NULL , `text` VARCHAR(200) NOT NULL , `image` VARCHAR(200) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;';



			if($query_run = mysql_query($query)){

				$feedback[] = "Table Created ...<br>";


			}else{
				$feedback[] = "Table cannot be created..";
				$feedback[] = mysql_error();
			}






		}


		




}else{
	$feedback[] = "Unable to connect to database server..";
}



?>