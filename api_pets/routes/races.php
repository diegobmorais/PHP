<?php 
require_once '../config.php';
require_once '../controllers/RaceController.php';

$method = $_SERVER['REQUEST_METHOD'];
$controller = new RaceController();

if($method === 'POST'){
    $controller->createOne();
}else if($method === 'GET' && isset($_GET['id'])){
   // $controller->list();
} /*else if($method === 'DELETE'){
    $controller->delete();
}else if($method === 'GET' && $_GET['id']){
    $controller->listOne();
}else if($method === 'PUT'){
    $controller->update();
}*/

?>