<?php

    //Maior que
    //10 > 8;
    
    //Menor que
    //10 < 20;

    //Maior ou igual  a
    //10 >= 10;

    //Menor ou igual a 
    //8 <= 8;
    
?>

<?php 

    $var1 = 2;
    $var2 = 5;
    $var3 = 2;

    //Operador "and"
    if(($var1 == $var3) && ($var2 > $var1))
        echo 'true';
    else
        echo 'false';

    //Operador "OR"

    if(($var1 == $var3) || ($var2 > $var1))
        echo 'true';
    else 
        echo 'false';

?>