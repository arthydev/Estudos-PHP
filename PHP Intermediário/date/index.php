<?php 

    # Utilizando datas

    $data = date('d/m/Y'); # d/m/Y é o formato que a data será processada, ou seja Dia/Mês/Anos

    echo "<h1>$data</h1>";

    # Utilizando horário

    date_default_timezone_set('America/Sao_Paulo'); # Define o Fuso horário padrão

    $hora = date('H:i:s'); # H:i:s é o formato que o horário será processado, ou seja Horas/Minutos/Segundos

    echo "<h2>$hora</h2>";

?>