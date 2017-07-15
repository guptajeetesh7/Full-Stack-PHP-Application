<?php

$location = '/uploads/';




if(isset($_POST['submit'])){

	$post = $_POST['post'];

	$file_name = $_FILES['file']['name'];

	$tmp_name = $_FILES['file']['tmp_name'];

	$target = 'uploads/'.$file_name;

	$person = $_SESSION['firstname'];

	

	

	$query = "INSERT INTO `posts` VALUES (null ,'$person' ,'$post' ,'$target')";
	

	if(isset($file_name) && !empty($file_name) ){

		$query = "INSERT INTO `posts` VALUES (null ,'$person' ,'$post' ,'$target')";

		if($query_run =  mysql_query($query)){

			//echo "<script type='text/javascript'>alert('To the database   ');</script>";
		}else{
			echo "<script type='text/javascript'>alert('Failed to database ');</script>";
		}

				

		if(move_uploaded_file($tmp_name,'uploads/'.$file_name))
											{
												echo "<script type='text/javascript'>alert('File on Server ');</script>";

											}
										else
											{
												echo "<script type='text/javascript'>alert(' File Not uploaded  ');</script>";
											}

		
	}

	else
	{
		echo "<script type='text/javascript'>alert('Please Select a File');</script>";
	}

}

?>
