<?php

include_once("Conexao.php");
include_once("../Modelo/Cliente.php");

class ClienteRepositorio{
	
	public function Cadastrar(Cliente $cliente){
		$sql = "INSERT INTO cliente(nome,email,senha) VALUES ('".$cliente->getNome()."','".$cliente->getEmail()."','".$cliente->getSenha()."')";
		$conexao = new Conexao();
        $conexao->Abrir();
        $execute = $conexao->Executar($sql);
        $conexao->Fechar();
        if($execute){
            return "Cadastro realizado com sucesso!";
        }
        else{
            return "Erro ao inserir!";
        }
	}
}
