<?php 

    # Sleep  é o tempo que o servidor espera antes de carregar o código
    sleep(1);
    # O servidor vai esperar 1 segundo para carregar a pagina    

    echo 'CARREGOU !';
    echo '<hr>';

    #     Die

    $condicao = true;

    if($condicao == true){
        #Se a condição for verdadeira o servidor espera 2 segundos e mostra a mensagem de confirmação
        sleep(2); 
        echo 'A condição é verdadeira';
    }else{
        #Se for falsa o servidor para de executar o código e mostra uma mensagem de erro
        die('Erro a condição não foi validada');
    }
?>