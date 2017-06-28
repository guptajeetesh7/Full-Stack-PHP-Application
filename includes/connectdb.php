<?php

$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$db_name = 'login';

$feedback =array();

if($connection = mysql_connect($db_host, $db_user, $db_pass)){

		$feedback[] = 'Connected to Database Sever ... <br>';

		$query = "CREATE DATABASE login";

		if($query_run = mysql_query($query)){

				$feedback[] = "Database Created ...<br>";
		}


		if(mysql_select_db($db_name)){

			$feedback[] =  "Database Selected ..<br>";

			$query = 'CREATE TABLE `data` ( `id` INT NOT NULL AUTO_INCREMENT , `username` VARCHAR(100) NOT NULL , `password` TEXT NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB;';



			if($query_run = mysql_query($query)){

				$feedback[] = "Table Created ...<br>";
			}else{
				$feedback[] = "Table cannot be created..";
				$feedback[] = mysql_error();
			}

		}


		




}else{
	echo "Unable to connect to database server..";
}

?>