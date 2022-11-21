<?php

include_once ('../Repositorio/Conexao.php');
include_once ('../Repositorio/PostRepositorio.php');
include_once ('../Modelo/Postagem.php');

if(empty($_POST['titulo']) && empty($_POST['conteudo']) && empty($_POST['data_postagem'])){
    echo "Digite todos os valores";
}else{
    $post = new Postagem();
    $post->setTitulo($_POST['titulo']);
    $post->setConteudo($_POST['conteudo']);
    $post->setDataPostagem($_POST['data_postagem']);
    $postRep = new PostRepositorio();
    $retorno = $postRep->Inserir($post);
    echo $retorno;
}