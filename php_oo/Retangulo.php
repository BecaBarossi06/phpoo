<?php
class retangulo{
    //atributos
    public $altura;
    public $largura;

    //métodos
    function __construct($altura, $largura)
    {
        $this->altura = $altura;
        $this->largura = $largura;
    }
    function calcular_area(){
        return $this->largura * $this->altura;
    }
    function calcular_perimetro(){
        return $this->largura*2 + $this->altura*2;
    }
}
?>