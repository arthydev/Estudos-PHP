<?php 
    $HOST = 'localhost'; # Endereço de hospedagem do Banco de Dados
    $DBNAME = 'php_banco_de_dados'; # Nome do Banco de Dados
    $DBUSER = 'root'; # Usuário de acesso
    $DBPASS = ''; # Senha de Acesso
    $pdo /*classe nativa para gerenciar DB com php*/ = new PDO('mysql:host='.$HOST.';dbname='.$DBNAME,$DBUSER,$DBPASS);

    echo 'Banco de dados conectado';

?>