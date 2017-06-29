<?php


	
	if(isset($_POST['Submit'])){


		if(!empty($_POST['username']) && !empty($_POST['firstname']) && !empty($_POST['lastname']) && !empty($_POST['email']) && !empty($_POST['password']) &&!empty($_POST['gender']) ){



			$username= mysql_real_escape_string( trim($_POST['username']) );
			$gender  = mysql_real_escape_string( trim($_POST['gender']) );
			$firstname = mysql_real_escape_string( trim($_POST['firstname']) );
			$lastname = mysql_real_escape_string( trim($_POST['lastname']) );
			$email = mysql_real_escape_string( trim($_POST['email']) );
			$password = mysql_real_escape_string( trim($_POST['password']) );

			$hash = md5($password);

			$query = "SELECT  `username`  FROM  `data`  WHERE  `username`  =  '$username' ";


 			$query_run = mysql_query($query);

 			if(mysql_num_rows($query_run) == 1){


 						echo "<script type='text/javascript'>alert('Username Already Taken');</script>";
	 		}else{



				$query = "INSERT INTO `data` VALUES (null ,'$username', '$firstname' ,'$lastname' ,'$email' ,'$hash' ,'$gender')";

				if($query_run = mysql_query($query)){

					echo "<script type='text/javascript'>alert('Account Made');</script>";
				}else{

					echo "<script type='text/javascript'>alert('OOP's Something went wrong');</script>";
				}

			}


			

		}else{
			echo "<script type='text/javascript'>alert('Please Fill Feilds');</script>";
		}


	}



?>