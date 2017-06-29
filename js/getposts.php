<?php

	
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';

$db_name = 'login';

$feedback =array();

$output = array();

if($connection = mysql_connect($db_host, $db_user, $db_pass)){

		$feedback[] = 'Connected to Database Sever ... <br>';


		if(mysql_select_db($db_name)){

			$feedback[] = "Dtabase connected";

			$query = "SELECT * FROM `posts` ORDER BY `id` DESC ";

			if($query_run = mysql_query($query)){

				while($row = mysql_fetch_assoc($query_run)){

					 $output[] = $row;
				}


			echo json_encode($output);
			}
			

		}


		




}else{
	$feedback[] = "Unable to connect to database server..";
}




?>