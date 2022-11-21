<?php

include_once ('../Repositorio/Conexao.php');
include_once ('../Repositorio/ClienteRepositorio.php');
include_once ('../Modelo/Cliente.php');

if(empty($_POST['nome']) && empty($_POST['email']) && empty($_POST['senha'])){
    echo "Digite todos os valores";
}else{
    $cliente = new Cliente();
    $cliente->setNome($_POST['nome']);
    $cliente->setEmail($_POST['email']);
    $cliente->setSenha($_POST['senha']);
    $clienteRep = new ClienteRepositorio();
    $retorno = $clienteRep->Cadastrar($cliente);
    echo $retorno;
}