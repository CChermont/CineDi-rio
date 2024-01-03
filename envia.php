<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $conexao = mysqli_connect("localhost","root","","cinediario");
        //Checar conexao
        if(!$conexao){
            echo"Não conectado";
        }
        echo"Conectado ao banco >>>>>>";

        //Coletar dados do formulário
        $nome = $_POST['nome'];
        $genero = $_POST['genero'];
        $classificacao = $_POST['classificacao'];
        $resumo = $_POST['resumo'];
        $recomendacao = $_POST['recomendacao'];

        $sql = "INSERT INTO cinediario.ConteudoAssistido(nome,genero,classificacao,resumo,recomendacao) values ('$nome','$genero','$classificacao','$resumo','$recomendacao')";
        $resultado = mysqli_query($conexao, $sql);
        echo">> MENSAGEM ENVIADA COM SUCESSO";
        
    ?>
</body>
</html>