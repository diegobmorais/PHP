<?php
require_once 'Funcionario.php';
require_once 'Empresa.php';
require_once 'utils.php';

class Empresa
{
    private $nome;
    private $cnpj;
    private $endereco;

    public function __construct($nome, $cnpj)
    {
        $this->nome = $nome;
        $this->cnpj = $cnpj;
    }


    public function contratar(Funcionario $funcionario){

        $data = [
            'id' => $funcionario->getId(),
            'nome' => $funcionario->getNome(),
            'idade' => $funcionario->getIdade(),
            'cpf' => $funcionario->getCpf(),
            'salario' => $funcionario->getSalario(),
        ];
        
        $allData = readFileContent('files/funcionario.txt');
        array_push($allData, $data);
        saveFileContent('files/funcionario.txt', $allData);
       
    }

    public function demitir($id){
        $allData = readFileContent('files/funcionario.txt');
        $dadosFiltrados = array_filter($allData, function ($item) use($id){
                return $item->id != $id;
        });
        saveFileContent('files/funcionario.txt', $dadosFiltrados);
    }

    public function listarFuncionarios(){
        $data = readFileContent('files/funcionario.txt');
        return $data;
    }

    public function aumentarSalario(Funcionario $funcionario, $novoSalario){
        // implementação
    }
}
