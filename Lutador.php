<?php


class Lutador {
    //Atributos
    private $nome;
    private $nacionalidade;
    private $idade;
    private $altura;
    private $peso;
    private $categoria;
    private $vitorias;
    private $derrotas;
    private $empates;
    
    //Metodos
    function apresentar(){
        echo "<p>Lutador: ".$this->getNome()." </p>";
        echo "<p>Origem: ".$this->getNacionalidade()." </p>";
        echo "<p>Idade: ".$this->getIdade()." </p>";
        echo "<p>Altura: ".$this->getAltura()." </p>";
        echo "<p>Peso: ".$this->getPeso()." </p>";
        echo "<p>Ganhou: ".$this->getVitorias()." </p>";
        echo "<p>Perdeu: ".$this->getDerrotas()." </p>";
        echo "<p>Empatou: ".$this->getEmpates()." </p>";
    }
    function status(){
        echo "<p>".$this->getNome()."</p>";
        echo "<p>É um peso ".$this->getCategoria()."</p>";
        echo "<p>Vitórias ".$this->getVitorias()."</p>";
        echo "<p>Derrotas ".$this->getDerrotas()."</p>";
        echo "<p>Empates ".$this->getEmpates()."</p>";
    }
    function ganharLuta(){
        $this->setVitorias($this->getVitorias()+1);
    }
    function perderLuta(){
        $this->setDerrotas($this->getDerrotas()+1);
    }
    function empatarLuta(){
        $this->setEmpates($this->getEmpates()+1);
    }
    //Metodos Especiais
    function __construct($no, $na, $id, $al, $pe, $vi, $de, $em) {
        $this->nome = $no;
        $this->nacionalidade = $na;
        $this->idade = $id;
        $this->altura = $al;
        $this->peso = $pe;
        $this->vitorias = $vi;
        $this->derrotas = $de;
        $this->empates = $em;
    }
    function getNome() {
        return $this->nome;
    }

    function getNacionalidade() {
        return $this->nacionalidade;
    }

    function getIdade() {
        return $this->idade;
    }

    function getAltura() {
        return $this->altura;
    }

    function getPeso() {
        return $this->peso;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function getVitorias() {
        return $this->vitorias;
    }

    function getDerrotas() {
        return $this->derrotas;
    }

    function getEmpates() {
        return $this->empates;
    }

    function setNome($nome) {
        $this->nome = $nome;
    }

    function setNacionalidade($nacionalidade) {
        $this->nacionalidade = $nacionalidade;
    }

    function setIdade($idade) {
        $this->idade = $idade;
    }

    function setAltura($altura) {
        $this->altura = $altura;
    }

    function setPeso($peso) {
        $this->peso = $peso;
        $this->setCategoria();
    }

    function setCategoria() {
        if($peso<52.2){
            $this->categoria = "Inválido";
        }elseif($peso<=70.3){
            $this->categoria = "Leve";
        } elseif($peso<=83.9){
            $this->categoria = "Médio";
        } elseif($peso<=120.2){
            $this->categoria = "Pesado";            
        } else {
            $this->categoria = "Inválido";
        }
    }

    function setVitorias($vitorias) {
        $this->vitorias = $vitorias;
    }

    function setDerrotas($derrotas) {
        $this->derrotas = $derrotas;
    }

    function setEmpates($empates) {
        $this->empates = $empates;
    }


}
