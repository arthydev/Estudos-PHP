<?php

    include ('interface.php');

    class Frase implements Interface1{ # IMPLEMENTANDO UMA INTERFACE
        public function escreverFrase($text)
        {
            echo $text; # Definindo como o método será tratado
        }
    };

    $frase = new Frase;
    $frase -> escreverFrase('Seja bem-vindo !');

?>