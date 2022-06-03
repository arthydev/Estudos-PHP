<?php 

    class Pessoa {

        private $nome;
        private $idade;
        private $peso;

        public function __construct($nome, $peso, $idade) # O método __construct é o primeiro a ser buscado em uma classe quando instanciada
        {
            $this -> nome = $nome;
            $this -> idade = $idade;
            $this -> peso = $peso;
        }

        public function getNome(){
            return $this-> nome;
        }

        public function getIdade(){
            return $this-> idade;
        }

        public function getPeso(){
            return $this-> peso;
        }

    }

?>