<?php

require('includes/core.inc.php');


?>

<!DOCTYPE html>
<html>
<head>
	<title>Full Stack Appliation</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet" type="text/css" href="css/style.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
  	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
  	<script type="text/javascript" src="scripts/angular.js"></script>
</head>
<body  >

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid" style="margin: 20px;">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#" ><strong>OUROBOROS</strong></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar" >
      <<form class="navbar-form navbar-right" action="" method="POST">
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Username" name="Username">
        <input type="password" class="form-control"  placeholder="Password" name="Password">
      </div>
      <button type="submit" class="btn btn-success" name="login">Log In</button><br>
        <a href="#" style="margin-top: 10px;">Forgotten Password?</a> 
    </form>
     
     
    </div>
  </div>
</nav><!--Navbar Ended-->


 
<div class="jumbotron" id='main' style="height: 100vh;">

  <div class="col-sm-8">
    
  </div>

  <div class="col-sm-4" >

    <h2><strong>Create a new account</strong></h2>
    <p>It's Free and always will be.</p>

    <form action="" method="POST">
     
    <input type="text" class="form-control" name="username" placeholder="User name">  
    <input type="text" class="form-control" name="firstname" placeholder="First name">
    <input type="text" class="form-control" name="lastname" placeholder="Last name">
    <input type="text" class="form-control" name="email" placeholder="Email Address">
    <input type="password" class="form-control" name="password" placeholder="Password">
    <select style="margin-left: 7px;" name="gender">
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
    <br><br>
    <button type="submit" name="Submit" class="btn-success btn text-center"><strong>Create Account</strong></button>


    </form>
    
  </div>
     
</div>
  



</body>
</html>