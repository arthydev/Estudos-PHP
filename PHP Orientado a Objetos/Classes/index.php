<?php 

    # Criando uma classe
    class Pessoa{

        private $nome = 'Jore';
        public $idade = 25;
        private $cidade = 'BH';

        public function envelhecer(){
            echo '<p>Estou envelhecendo</p>';
        }

        private function mudando(){
            echo '<p>Estou me mudando</p>';
        }

    }

    # Instanciando uma classe

    $pessoa = new Pessoa;

    $pessoa -> envelhecer(); # Acessando o metedodo, executa a função pois ela é publica

    /*$pessoa -> mudando();   # Acessando o metedodo, não executa a função pois ela é privada*/

?>