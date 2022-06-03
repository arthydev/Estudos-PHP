<?php 

    include ('pessoa.php');


    $pessoa = new Pessoa('Arthur', '65 Kg', '18 Anos');
    echo $pessoa -> getNome();
    echo '<hr>';
    echo $pessoa -> getIdade();
    echo '<hr>';
    echo $pessoa -> getPeso();
    echo '<hr>';
?>