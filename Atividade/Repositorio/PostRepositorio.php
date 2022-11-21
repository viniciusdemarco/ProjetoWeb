<?php
include_once("Conexao.php");
include_once("../Modelo/Postagem.php");

class PostRepositorio{
    public function Inserir(Postagem $post){
        $sql = "INSERT INTO post(titulo, conteudo, data_postagem) VALUES ('".$post->getTitulo()."','".$post->getConteudo()."','".$post->getDataPostagem()."')";
        $conexao = new Conexao();
        $conexao->Abrir();
        $execute = $conexao->Executar($sql);
        $conexao->Fechar();
        if($execute){
            return "Postagem realizada com sucesso!";
        }
        else{
            return "Erro ao inserir!";
        }
    }
    public function Consultar(post $post){
        $sql = "SELECT *from data_postagem = $post->getDataPostagem()";
        $conexao = new Conexao();
        $conexao ->Abrir();
        $execute = $conexao->Executar($sql);
        $conexao->Fechar();
        if($execute){
            if($post->setDataPostagem() < now()){
                return $sql;
            }else{
                return "Postagem Não encontrada";
            }
        }
        else{
            return "Erro ao buscar";
        }
    }
}