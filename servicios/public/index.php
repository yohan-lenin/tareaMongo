<?php
/*require '../vendor/autoload.php';

use \Slim\App;

$app = new \Slim\App;

$app->get('/listdata', 'showData');
$app->post('/create', 'addData');
$app->run();
/*
$app->gET('/xyz/:d', 
    function($d) use ($app){
    echo 'hola '.$d;
    
    
    $app->response->headers->set('Content-type', 'application/json');
    $app->response->status(200);
    $app->response->body(json_encode($d));
}); 

function addData()
{
/* connect
    $m = new MongoClient();
// select your database
    $db = $m->educadores;
// select your collection
    $collection = $db->profesor;
// add a record
    $document = array("title" => "title 1", "author" => "author 1");
    $collection->insert($document);
// add another record
    $document = array("title" => "title 2", "author" => "author 2");
    $collection->insert($document);

function showData()
{
    //echo "Hola";

// connect
    $m = new MongoDB/Client("localhost:127.0.0.1:27017");
// select your database
    $db = $m->educadores;
// select your collection
    $collection = $db->profesor;
// find everything in the collection
    $cursor = $collection->find();
// Show the result here
    foreach ($cursor as $document) {
        echo $document["title"] . "\n";
    }

}

*/
?>