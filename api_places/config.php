<?php
date_default_timezone_set('America/Sao_Paulo');
define('FILE_REVIEWS', 'avaliacoes.txt');
define('FILE_CITY', 'equador.txt');

header("Content-Type: application/json"); // a aplicação retorna json
header("Access-Control-Allow-Origin: *"); // vai aceitar requisições de todas origens
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // habilita métodos
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, X-Requested-With");