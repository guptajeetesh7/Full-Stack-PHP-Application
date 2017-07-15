var app = angular.module('myApp',[]);



app.controller('homecontroller',function($scope,$http,$interval){

	
	$interval(function(){

		$http.get('includes/sharepost/getmyposts.php').then(function(response){

			$scope.sharedposts = response.data;

			
		},function(){

			alert("Error");
		});

	},3000);
		








    
});


