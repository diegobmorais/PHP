<?php
require_once 'utils.php';
require_once 'dragaoController.php';

$method = $_SERVER['REQUEST_METHOD'];

$controller = new dragaoController();

if ($method === 'POST') {
    $body = getBody();
    $controller->create($body);

} else if($method === "GET") {
    $controller->listar();
}

?>