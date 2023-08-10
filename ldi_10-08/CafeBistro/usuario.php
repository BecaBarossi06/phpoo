<?php
class Usuario{
    //atributos da classe Pessoa
    public $nome;
    public $email;
    public $senha;

    //métodos da classe
    function __construct($nome,$email,$senha){
        $this->nome = $nome;
        $this->idade = $email;
        $this->profissao = $senha;
    }
    function get_nome(){
        return $this->nome; 
    }
    function set_nome($nome){
        $this->nome = $nome;
    }
    function get_email(){
        return $this->email;
    }
    function set_email($email){
        $this->email = $email;
    }
    function get_senha(){
        return $this->senha;
    }
    function set_senha($senha){
        $this->senha = $senha;
    }

}

?>