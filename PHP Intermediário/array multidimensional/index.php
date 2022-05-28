<?php 

    $arr = [array('A','B','C'), array(1, 2, 3), array("@", "#", "$")];
    

    $length = count($arr);

    for($i = 0; $i < $length; $i++){
        echo $arr[0][$i];
        echo '<br>';
    };

    for($i = 0; $i < $length; $i++){
        echo $arr[1][$i];
        echo '<br>';
    };

    for($i = 0; $i < $length; $i++){
        echo $arr[2][$i];
        echo '<br>';
    };

    echo $arr[/*Array*/0][/*Conteudo do array*/ 0];

?>
