<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset = "UTF-8">
    <title>PROJETO</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
    <h1>Testando...</h1>
    <form action="index.php" method="post">
        <p>Digite seu nome abaixo: <input type="text" name="nome"></p>
        <input type="submit" name="acao" value="enviar">
    </form>
    <?php
        include('class/Nome.class.php');
        $nome_pessoa = $_POST['nome'];

        $pessoa = new Nome;
    
        $pessoa->pegar_nome($nome_pessoa);
        echo "<br/>";
        echo "Seu nome é ". $pessoa->devolver_nome();
    ?>
    
</body>
</html>

