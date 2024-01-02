<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $conexao = mysqli_connect("localhost","root","","");
        //Checar conexao
        if(!$conexao){
            echo"Não conectado";
        }
        echo"Conectado ao banco >>>>>>";

        $nome = $_POST['name'];
        $email = $_POST['email'];
        $assunto = $_POST['subject'];
        $mensagem = $_POST['message'];

        $sql = "INSERT INTO cadastro.dados(nome,email,assunto,mensagem) values ('$nome','$email','$assunto','$mensagem')";
        $resultado = mysqli_query($conexao, $sql);
        echo">> MENSAGEM ENVIADA COM SUCESSO";
        
    ?>
</body>
</html>