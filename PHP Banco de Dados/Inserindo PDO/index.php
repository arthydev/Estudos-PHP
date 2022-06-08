<?php 

    /* Configurando Conexão */

$HOST = 'localhost'; # Endereço de hospedagem do Banco de Dados
$DBNAME = 'php_banco_de_dados'; # Nome do Banco de Dados
$DBUSER = 'root'; # Usuário de acesso
$DBPASS = ''; # Senha de Acesso

$pdo /*classe nativa para gerenciar DB com php*/ = new PDO('mysql:host='.$HOST.';dbname='.$DBNAME,$DBUSER,$DBPASS);

date_default_timezone_set('America/Sao_Paulo'); # Define o fuso horário padrão

?>

<?php 

     /* Configurando a querie  */

    if(isset($_POST['acao']))
    {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $data_registro = date('d-m-Y H:i:s');

        $sql = $pdo ->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)"); 
        # Define a querie que será feita para a tabela 'clientes' com os valores (id, nome, sobrenome, data_registro)
        # O Id sempre será null pois é definido automaticamente

        $sql->execute(array($nome, $sobrenome, $data_registro));
        # Executa a querie definida

        echo 'Cliente Cadastrado';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
        <form method="POST">

            <input type="text" name="nome" required>
            <input type="text" name="sobrenome" required>
            <input type="submit" name="acao" value="Cadastrar" required>

        </form>
</body>
</html>


