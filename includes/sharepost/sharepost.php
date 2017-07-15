<?php
session_start();

require('../databases/connect.sharepost.php');

$data = json_decode(file_get_contents("php://input"));

$person = mysql_real_escape_string($data->person);
$text = mysql_real_escape_string($data->text);
$image = mysql_real_escape_string($data->image);



				
				$query = "INSERT INTO `$db_user_table` VALUES (null , '$person' ,'$text','$image') 	";

				if($query_run = mysql_query($query)){

					echo "<script type='text/javascript'>alert('Post Shared');</script>";
				}else{
					echo "<script type='text/javascript'>alert('Post cannot be shared');</script>";
				}



?>