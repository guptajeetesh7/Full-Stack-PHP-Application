<?php

session_start();



require('includes/home.inc.php');


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
    <link rel="stylesheet" type="text/css" href="css/home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular-route.js"></script>
    <script type="text/javascript" src="js/angular.js"></script>
</head>
<body  ng-app='myApp'>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span> 
      </button>
      <a class="navbar-brand" href="#"><strong>OUROBOROS</strong></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <form class="navbar-form navbar-left">
        
          <input type="text" class="form-control" placeholder="Instant Search Posts.." ng-model="search">
          
           
          
        
      </form>
      <ul class="nav navbar-nav navbar-right">
      
        <li><a href="includes/submissions/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>






 
<div class="container-fluid" id='main' ng-controller="posts" >

     <div class="col-sm-4 ">
       
     </div>

     <div class="col-sm-4 ">

             <div class="row blog text-center">

                 <h3 >Create a Post</h3><hr>

                 <form method="POST" action="" enctype="multipart/form-data" > 

                  <textarea type="text" name="post" placeholder="Hi, Tell us about your Pet."></textarea><hr>
                  
                 
                   
                  <input type="file" name="file" >                
                  

                  <input type="submit" name="submit" value="POST" class="btn btn-success" >

                </form>
                 
                

              </div>


              <div class="row blog text-center" ng-repeat="post in posts | filter:search as filtered_result " >


                  
                  <h3>{{post.person}}</h3><hr>

                  <p>{{post.text}}</p>

                  <img src="{{post.image}}" id="post_image">
                  

              </div>

              <div class="blog text-center"  ng-show="filtered_result.length==0">No other such posts</div>
             
        </div>   

     </div>

     <div class="col-sm-4">
       
     </div>


</div>



</body>
</html>