<?php

session_start();

require('../databases/connect.sharepost.php');

$output= array();


$query = "SELECT `id`,`person`, `text`, `image`  FROM `$db_user_table` ORDER BY `id` DESC";

if($query_run=mysql_query($query))
{

	while ($row = mysql_fetch_assoc($query_run)) {
	
			$output[] =$row; 
	}

	echo json_encode($output);
}


?>
