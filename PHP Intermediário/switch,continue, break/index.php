<?php 

    $produto = 'banana';

    switch($produto){
        case 'maçã':
            echo 'O preço é R$ 2.50';
            break; # Break faz o código parar de ser lido
        case 'banana':
            echo 'O preço é R$ 1.50';
            break;
        case 'batata':
            echo 'O preço é R$ 4.80';
            break; 
    }

    echo '<br>';

    for($i = 0; $i <= 10; $i++ ){

        if($i == 6){
            continue; # Continue faz o loop ir para a proxima execução de código
        }elseif($i == 9){
            break;
        };
        echo $i;
        echo '<hr>';
    };
?>