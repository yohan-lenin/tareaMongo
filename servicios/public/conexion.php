<?php
use \psr\Http\Message\ServerRequestInterface as Request;
use \psr\Http\Message\ResponseInterface as response;

require '../vendor/autoload.php';


$app = new \Slim\App();


$app->get("/profesor/{id}", function ($request, $response, $arg) {

	$app = new \Slim\App();

	$client = new MongoDB\Client;
	// select your database
	$educadores = $client->educadores;
	// select your collection
	$profesor = $educadores->profesor;


	$consulta = $profesor->findOne(['_id' => $arg['id']]);

		return json_encode($consulta);


	});


$app->get("/profesor", function ($request, $response, $arg) {

	$app = new \Slim\App();

	$client = new MongoDB\Client;
	// select your database
	$educadores = $client->educadores;
	// select your collection
	$profesor = $educadores->profesor;


	$consulta = $profesor->find();

	$response = iterator_to_array($consulta);
	echoResponse(200, $response);


	});

function echoResponse($status_code, $response){
	$api = new \Slim\App;
	$api->status($status_code);

	$spi->contentType('application/json');
	echo json_encode($response);
}

$app->post("/Profesor", function ($request, $response, $arg){

	$app = new \Slim\App();

	$client = new MongoDB\Client;
	// select your database
	$educadores = $client->educadores;
	// select your collection
	$profesor = $educadores->profesor;

	//$identificador =  $app->request->post('identificador');
	$name = $app->request->post('name');
	$apellido =  $app->request->post('apellido');
	$edad =  $app->request->post('edad');
	$cursos = $app->request->post('cursos');
	$cuchilla = $app->request->post('cuchilla');
	$document = $profesor->insertOne(
		[ 'nombre' => '$name', 'apellido' => '$apellido', 'edad' => '$edad', 'cursos' => '$cursos', 'cuchilla' => '$cuchilla']);

	var_dump($document->getInsertId());
	//$app->request->post()
	//$insertProfe = $profesor->insertOne(
	//	['id' =>  
	//);

}); 
$app->put("/profesor/{id}", function($request, $response, $arg){

	$app = new \Slim\App();

	$client = new MongoDB\Client;
	// select your database
	$educadores = $client->educadores;
	// select your collection
	$profesor = $educadores->profesor;


	$consulta = $profesor->replaceOne(
		['_id' => $arg['id']],
		['_id' => $arg['id'],
		'nombre' => $app->request->put('name'),
		'apellido' => $app->request->put('apellido'),
		'edad' => $app->request->put('edad'),
		'cursos' => $app->request->put('cursos'),
		'cuchilla' => $app->request->put('cuchilla')]
	);


});

$app->delete("/profesor/{id}", function ($request, $response, $arg) {

	$app = new \Slim\App();

	$client = new MongoDB\Client;
	// select your database
	$educadores = $client->educadores;
	// select your collection
	$profesor = $educadores->profesor;


	$consulta = $profesor->deleteOne(['_id' => $arg['id']]);

	printf("Delete %id documents", $consulta->getDeletedCount());
	});




$app->run();

?>