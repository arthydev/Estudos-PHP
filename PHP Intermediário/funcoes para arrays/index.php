<?php 

    $arr1 = [0, 1 , 2 , 3];
    $arr2 = [4, 5 , 6 , 7];
    $arrResult = array_merge($arr1, $arr2); #array_merge combina um ou mais arrays;

    print_r($arrResult);

    echo '<hr>';

    $chave = ['NOME', 'IDADE', 'PESO', 'CIDADE'];
    $valor = ['Arthur', '18', '68KG', 'BH'];
    $user = array_combine($chave, $valor); # array_combine cria um array usando um array para chaves e outro para valores

    print_r($user);
    
    echo '<hr>';

    $nomes = ['<h1>Arthur</h1>', '<h2>Jorge</h2>', '<h3>Pedro</h3>'];

    print_r($nomes); 

    echo '<hr>';

    print_r(array_map('strip_tags', $nomes)); # array_map aplica uma função em cada item do array
?>