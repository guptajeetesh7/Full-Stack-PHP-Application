<?php



function loggedin(){

if(isset($_SESSION['username']) and !empty($_SESSION['username'])){

	return true;

}else{
	return false;
	}
}





	if(isset($_POST['login'])){

		if(!empty($_POST['Username']) && !empty($_POST['Password'])){

			$username = mysql_real_escape_string($_POST['Username']);
			$password = mysql_real_escape_string($_POST['Password']);

			$password_hash = md5($password);

			$query = "SELECT   `username` ,`firstname`, `password` FROM `data` WHERE `username` = '$username' AND   `password` =  '$password_hash' ";
			
			if($query_run = mysql_query($query)){

		
		
			$query_rows = mysql_num_rows($query_run);
			if($query_rows == 0){
				echo "<script type='text/javascript'>alert('Invalid Account');</script>";
			}

			elseif ($query_rows == 1) {

				$user_name = mysql_result($query_run,0,"username" );

				$firstname = mysql_result($query_run,0,"firstname" );

				$_SESSION['userername'] = $user_name;

				$_SESSION['firstname'] = $firstname;

				

				header('Location: home.php');
				
			
			}
		  }
				

		}else{

			echo "<script type='text/javascript'>alert('Please fill Credentials');</script>";
		}

	}


?>