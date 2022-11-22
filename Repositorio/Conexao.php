<?php
class Conexao{
    private $servidor = "localhost";
    private $usuario = "root";
    private $senha = "";
    private $dbname = "VMartins";
    private $conexao;

    public function Abrir(){
        $this->conexao = new mysqli($this->servidor, $this->usuario,$this->senha, $this->dbname);
    }
    public function Fechar(){
        $this->conexao->close();
    }
    public function Buscar(){
        $query = $this->conexao->query($sql);
        return $query->fetch_all();
    }
    public function Executar($sql){
        return $this->conexao->query($sql);
    }
}

?>