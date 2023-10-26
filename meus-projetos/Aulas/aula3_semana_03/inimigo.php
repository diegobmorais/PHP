<?php 

class inimigo {
    protected $id;
    protected $nome;
    protected $vida;
    protected $dano;
    protected $defesa;
    protected $level;
    protected $tipo;

    public function __construct($tipo)
    {
        $this->id = uniqid();
        $this->tipo = $tipo;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;

    }
    public function getVida()
    {
        return $this->vida;
    }
    public function setVida($vida)
    {
        $this->vida = $vida;

    }
    public function getTipo()
    {
        return $this->tipo;
    }
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;

    }
    public function getDano()
    {
        return $this->dano;
    }
    public function setDano($dano)
    {
        $this->dano = $dano;

    }
    public function getDefesa()
    {
        return $this->defesa;
    } 
    public function setDefesa($defesa)
    {
        $this->defesa = $defesa;

    } 
    public function getLevel()
    {
        return $this->level;
    }
    public function setLevel($level)
    {
        $this->level = $level;

    }

    public function atacar(){

    }
}
    
?>