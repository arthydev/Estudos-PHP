<?php

    $arr = array('Arthur', 'Jorge', 'Cleiton', 'Claudio');

    #Como usar o foreach

    foreach(/*Nome do array*/$arr as $key => $value){
        
        #Codigo para ser executado

        echo "$key $value";
        echo "<hr>";
    };

    $length = count($arr);

    for($i = 0; $i < $length; $i++){
        echo $i .$arr[$i];
    }

?>