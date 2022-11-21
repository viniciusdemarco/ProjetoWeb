<?php

class postagem{
    private $titulo;
    private $conteudo;
    private $data_postagem;

    /**
     * @return mixed
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param mixed $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return mixed
     */
    public function getConteudo()
    {
        return $this->conteudo;
    }

    /**
     * @param mixed $conteudo
     */
    public function setConteudo($conteudo)
    {
        $this->conteudo = $conteudo;
    }

    /**
     * @return mixed
     */
    public function getDataPostagem()
    {
        return $this->data_postagem;
    }

    /**
     * @param mixed $data_postagem
     */
    public function setDataPostagem($data_postagem)
    {
        $this->data_postagem = $data_postagem;
    }
}
?>