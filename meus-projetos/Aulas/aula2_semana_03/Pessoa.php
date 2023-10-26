<?php
    class Pessoa {
        private $id;
        private $nome;
        private $idade;
        private $cpf;

        public function __construct($nome, $cpf) {
            $this->id = uniqid();
            $this->nome = $nome;
            $this->cpf = $cpf;
        }

        public function getCpf(){
           return $this->cpf; 
        }

        public function setCpf($cpf){
             $this->cpf = $cpf; 
         }
         public function getNome(){
            return $this->nome; 
         }
 
         public function setNome($nome){
              $this->nome = $nome; 
          }
          public function getIdade(){
            return $this->idade; 
         }
 
         public function setIdade($idade){
              $this->idade = $idade; 
          }
          public function getId(){
            return $this->id; 
         }
 
    }

?>