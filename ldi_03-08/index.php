<?php
require ("Pessoa.php");
require ("Retangulo.php");
    class Fruta{
        //atributos
        private $nome;
        public $cor;

        //métodos
        function __construct($nome, $cor)
        {
            $this->nome = $nome;
            $this->cor = $cor;
        }

        function set_name($nome)
        {
            $this->nome = $nome;
        }

        function get_name()
        {
            return $this->nome;
        }

        function set_cor($cor)
        {
            $this->cor = $cor;
        }

        function get_cor(){
            return $this->cor;
        }
    }
    //criando objeto
    $maca = new Fruta("Maçã_ifsp_turmaB", "Vermelha");
    $banana = new Fruta("Banana_ifsp_turmaB", "Amarela");

    $maca->set_name("Maçã_ifsp_turmaB");
    $banana->set_name("Banana_ifsp_turmaB");

    echo $maca->get_name();
    echo "<br>".$banana->get_name();
        
    echo "<br>".$maca->get_cor();
    echo "<br>".$banana->get_cor();

    $aluno1 = new Pessoa("Rebeca", 17, "garota de programa");
    $aluno2 = new Pessoa("Poliama", 17, "crente");

    echo "<br>".$aluno1->apresentar();
    echo "<br>".$aluno2->apresentar();

    $retangulo = new Retangulo(2,4);
    echo "<br>Área do retângulo = ".$retangulo->calcular_area();
    echo "<br>Perimetro do retângulo = ".$retangulo->calcular_perimetro();
?>