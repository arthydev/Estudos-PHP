<?php 
    session_start(); 

    if(isset($_SESSION['ACAO'])){ # Verifica se o form foi enviado
        echo 'Nome definido: ' .$_SESSION['NOME'];
        echo '<br>';
        echo 'Senha definida: ' .$_SESSION['SENHA'];

        # Caso sim retorna o nome e a senha enviados
    }else{
        echo '<h2 style="color: red;">Erro sessão não definida</h2>';
        # Caso não retorna uma mensagem de erro
    };
        
?>