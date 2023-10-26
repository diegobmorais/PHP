<?php
require_once 'inimigo.php';

class dragao extends inimigo{

    private $power;

    public function __construct() {
        parent::__construct("Dragon");
    }

    public function save(){
        $data = [
            'id' => $this->id,
            'nome' => $this->nome,
            'dano' => $this->dano,
            'defesa' => $this->defesa,
            'vida' => $this->vida
        ];

        $allData = readFileContent('dragoes.txt');
        array_push($allData, $data);
        saveFileContent('dragoes.txt', $allData);

        return true;
    }
    
    public function listar(){
        $allData = readFileContent('dragoes.txt');
        return $allData;
    }

    public function atacar() {
        echo "Atacando com fogo";
    }


}