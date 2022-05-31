<?php 

    $nome = 'Arthur Henrique Catelani';

    $separaNome = explode(' '/*Separador*/, $nome); #Divide uma string em um array de strings

    print_r($separaNome);

    echo '<hr>';

    $juntaNome = implode(' ' /*Separador*/, $separaNome); # Junta elementos de um array em uma string

    echo $juntaNome;


    echo '<hr>';

    $content = '<h2>Olá mundo</h2>';

    echo strip_tags($content); # Retira as tags HTML e PHP de uma string

    echo '<hr>';

    echo htmlentities($content); # Converte todos os caracteres aplicáveis em entidades html
?>