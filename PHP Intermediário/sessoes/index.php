<?php 

    session_start(); # Inicia uma sessão

    $_SESSION['NOME'] = @$_POST['nome']; # Salva o nome na sessão
    $_SESSION['SENHA'] = @$_POST['senha']; # Salva a senha na sessão
    $_SESSION['ACAO'] = @$_POST['acao']; # Salva o envio do form na sessão
?>

<html>

<body>
        <form method="POST">
            <label for="nome">Nome</label>
            <input type="text" name="nome">
            <label for="senha">Senha</label>
            <input type="password" name="senha">

            <input type="submit" name="acao" value="Enviar">
        </form>


        <form method="POST">
           <input type="submit" name="fecharSessao" value="Fechar">
        </form>
    <?php 
        if(isset($_POST['fecharSessao'])){
            session_destroy(); # Apaga a sessão
        };
    ?>
</body>


</html>