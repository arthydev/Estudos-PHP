<?php

    function calculaIdade($nascimento, $anoAtual)# Parâmetros da função 
    {
        return  $anoAtual - $nascimento; #Código que a função vai execetar
    };

    echo 'Sua idade é ';
    echo calculaIdade(2004, 2022);

    function escreveNome($nome = 'Jorge') # Definindo um valor padrão como parâmetro 
    {
        echo 'Seu nome é: ' .$nome;
    };

    echo '<hr>';

    escreveNome('Arthur');
?>