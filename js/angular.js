var app = angular.module('myApp',[]);

app.controller('posts',function($scope,$http,$interval){

		$scope.posts = [];


$interval(function(){

			$http({
		        method : "GET",
		        url : "includes/submissions/getposts.php"
		    }).then(function mySuccess(response) {
		        
		    	$scope.posts = response.data;

		    	

		    }, 

		    	function myError(response) {
		        
		        alert('not done');
		    });



},1000);









    
});


