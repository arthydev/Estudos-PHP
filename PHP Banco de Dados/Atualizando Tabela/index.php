<?php 

    $HOST = 'localhost';
    $DBNAME = 'php_banco_de_dados';
    $DBUSER = 'root';
    $DBPASS = '';

    $pdo = new PDO('mysql:host='.$HOST.';dbname='.$DBNAME, $DBUSER, $DBPASS );

    $sql = $pdo->prepare("UPDATE `clientes` SET nome='Herick', sobrenome='Mendes' WHERE id=9 AND nome='Cleiton' OR sobrenome='Santos'");

    # UPDATE seleciona qual tabela deve ser atualizada
    # SET define qual será a atualização
    # WHERE define onde será atualizado (Exemplo: será atualizado o item onde o id for igual a 9)
    # AND adiciona uma condição que também deve ser verdadeira (Exemplo: o id deve ser igual a 9 E o nome deve ser igual a 'Cleiton') 
    # OR é uma condição alternativa (Exemplo: O nome deve ser igual a 'Cleiton' OU o sobrenome deve ser igual a 'Santos')


    if($sql->execute()){
        echo 'Tabela Atualizada';
    };

?>