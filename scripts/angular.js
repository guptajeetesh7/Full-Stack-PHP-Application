var app = angular.module('myApp',["ngRoute"]);

app.config(function($routeProvider){

	$routeProvider.when('/',{

		templateUrl: 'templates/Login.html',
		controller: 'Login'
	})
	.when('/register',{

		templateUrl : 'templates/register.html'
	});



});

//---> Login Portal Controller 

app.controller('Login',function($scope,$location){

	
	$scope.register = function(){

		$location.path('/register');
		
	}


});