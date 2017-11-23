(function(){

var app = angular.module("MyApp", []);

 app.controller("primerControl", function ($scope, $http){
	$scope.posts = [];
	$http.get("http://localhost/servicios/public/conexion.php/profesor")
		.success(function(data){
			console.log(data);
			$scope.posts =data;
			console.log($scope.posts);

		})

		.error(function(err){
			console.log("error");
		});
/*
	$scope.addPost = function(){
		$http.post("http://localhost/servicios/public/conexion.php/profesor", {
			id: $scope.newPost.id,
			nombre: $scope.newPost.nombre,
			apellido: $scope.newPost.apellido,
			edad: $scope.newPost.edad,
			cursos: $scope.newPost.cursos,
			cuchilla: $scope.newPost.cuchilla
		})
		.success(function(data,status,headers,config){
			console.log(data);
			$scope.posts.push($scope.newPost);
			$scope.newPost = {};
		})
		.error(function(error, status, headers, config){
			console.log(error);
		});
	}*/
});
})();

/*
worldTourApp.controller('worldTourCtrl', 
	function ($scope, $http){
		var urlCountries = 'http://localhost/servicios/public/conexion.php/profesor';
		$scope.nombre = "lenin";
		$scope.lo
	}
	)

function mainController($scope, $http) {
	$scope.formData = {};

	// Cuando se cargue la página, pide del API todos los TODOs
	$http.get('/api/todos')
		.success(function(data) {
			$scope.todos = data;
			console.log(data)
		})
		.error(function(data) {
			console.log('Error: ' + data);
		});

	// Cuando se añade un nuevo TODO, manda el texto a la API
	$scope.createTodo = function(){
		$http.post('/api/todos', $scope.formData)
			.success(function(data) {
				$scope.formData = {};
				$scope.todos = data;
				console.log(data);
			})
			.error(function(data) {
				console.log('Error:' + data);
			});
	};

	// Borra un TODO despues de checkearlo como acabado
	$scope.deleteTodo = function(id) {
		$http.delete('/api/todos/' + id)
			.success(function(data) {
				$scope.todos = data;
				console.log(data);
			})
			.error(function(data) {
				console.log('Error:' + data);
			});
	};
}*/