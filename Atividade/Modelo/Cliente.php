<?php
class Cliente
{
    private $nome;
    private $email;
    private $senha;

    /**
     * @return string
     */
    public function getNome():string
    {
        return $this->nome;
    }

    /**
     * @param mixed $nome
     */
    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

     /**
     * @return string
     */
    public function getEmail():string
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail(string $email)
    {
        $this->email = $email;
    }

     /**
     * @return string
     */
    public function getSenha():string
    {
        return $this->senha;
    }

    /**
     * @param mixed $senha
     */
    public function setSenha(string $senha)
    {
        $this->senha = $senha;
    }
}
?>