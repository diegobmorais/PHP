<?php
require_once 'utils.php';
require_once 'dragao.php';

class dragaoController
{
    function create($body)
    {
        // Capturei o body
        $nome =  sanitizeInput($body, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
        $vida = sanitizeInput($body, 'vida', FILTER_VALIDATE_FLOAT);
        $dano = sanitizeInput($body, 'dano', FILTER_VALIDATE_FLOAT);
        $defesa = sanitizeInput($body, 'defesa', FILTER_VALIDATE_FLOAT);
        $level = sanitizeInput($body, 'level', FILTER_VALIDATE_INT);

        if (!$nome) responseError("O nome é obrigatório", 400);
        if (!$vida) responseError("O vida é obrigatório", 400);
        if (!$dano) responseError("O dano é obrigatório", 400);
        if (!$defesa) responseError("A defesa é obrigatória", 400);
        if (!$level) responseError("O level é obrigatória", 400);

        $dragon = new dragao();
        $dragon->setNome($nome);
        $dragon->setVida($vida);
        $dragon->setDano($dano);
        $dragon->setDefesa($defesa);
        $dragon->setLevel($level);

        if ($dragon->save()) {
            response(["message" => "Dragão cadastrado com sucesso"], 201);
        } else {
            responseError("Falha ao salva o dragão", 400);
        }
    }

    function listar(){
        $list = (new dragao())->listar();
        response($list, 200);
    }
}