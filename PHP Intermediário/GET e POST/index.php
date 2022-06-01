<?php
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Get e Post</title>
</head>
<body>
    <form> 
        <label for="nome">Nome</label>
        <input type="text" name="nome">
        <label for="email">Email</label>
        <input type="email" name="email">
        <input type="submit" name="acao" value="Enviar">
    </form>

    <?php 

        # GET recupera informações passadas pela url

        if(isset($_GET['acao'])){ # Verifica se o formulario foi enviado
            $nome = $_GET['nome'];
            $email = $_GET['email'];
            echo $nome;
            echo '<br>';
            echo $email;
        };
    ?>

    <hr>

    <form method="POST">
        <label for="endereco">Endereço</label>
        <input type="text" name="endereco">
        <label for="numero">Número</label>
        <input type="text" name="numero">
        
        <label for="cidade">Cidade</label>
        <select name="cidade">
            <option value="BH">BH</option>
            <option value="SP">SP</option>
            <option value="BA">BA</option>
            <option value="MT">MT</option>
        </select>

        <input type="submit" name="acao" value="Enviar">
    </form>

    <?php 
    
        # POST é utilizado para enviar dados para o servidor

        $endereco = @$_POST['endereco'];
        $numero = @$_POST['numero'];
        $cidade = @$_POST['cidade'];
        

       echo $endereco;
       echo '<br>';
       echo $numero;
       echo '<br>';
       echo $cidade;
    ?>

</body>
</html>