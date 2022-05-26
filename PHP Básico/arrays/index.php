<?php
    $nome = array('Claudio', 'Jorge', 'Cesar', 'Lucio');
    $cidade[] = 'BH';
    $cidade[] = 'SP';
    $cidade[] = 'RJ';
    $cidade[] = 'BA';

    $cidade[6] = 'MT';
    
    /*Nomeando o indice */
    $user['NOME'] = 'Arthur';
    $user['IDADE'] = '18';
    $user['CIDADE'] = 'Belo Horizonte';
    $user['ESTADO'] = 'MG';
?>

<html>
    <?php 
    echo '<pre>';
    print_r($cidade);
    echo '</pre>';
    echo '<pre>';
    print_r($user);
    echo '</pre>';
    ?>
</html>