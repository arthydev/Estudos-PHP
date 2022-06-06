<?php 

    /*
        Factory
    */

        class Cachorro
        {
            function __construct()
            {
                echo 'Cachorro';
            }
        }

        class Gato
        {
            function __construct()
            {
                echo 'Gato';
            }
        }

        class Rato
        {
            function __construct()
            {
                echo 'Rato';
            }
        }

        class Animal{
            
            public static function build($animal){ # Método que instancia uma classe animal
                
                if(class_exists($animal)){ # Verifica se a classe existe
                    return new $animal;
                }else
                {
                    die('<h1 style="color : red;">Erro a classe ' .$animal  .' não existe</h1>'); # Interrompe o código caso a classe não exista
                }
                
            }

        }


    Animal::build('Cobra');

?>