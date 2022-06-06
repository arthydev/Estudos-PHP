<?php 

    function AutoLoad($class){

        $class = str_replace('\\', '/', $class); # Substitui a contra barra por uma barra normal, evita erro de endereço no linux

        if(file_exists('classes/'.$class.'.php')){ # Verifica se o arquivo existe
            include('classes/'.$class.'.php');
        }
    };

    spl_autoload_register('AutoLoad');

?>