<?php 
    session_start();
    
    setcookie('cidade','BH', time() + 60, '/'); # Declarando um cookie.
    /*
        O cookie será criado com o nome de "cidade"
        o valor será "BH"
        e vai durar apenas 60 segundos antes de ser apagado.
    */
    echo $_COOKIE['nome'];

?>
