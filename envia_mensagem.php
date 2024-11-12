<?php
    //Primeira Etapa do CRUD (Insert)
    include_once("config.inc.php");

    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $assunto = $_REQUEST['assunto'];
    $mensagem = $_REQUEST['mensagem'];

    $sql = "INSERT INTO contatos
    (nome, email, assunto, mensagem)
    VALUES
    ('$nome','$email','$assunto','$mensagem')";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<div class='mensagem-sucesso'>Obrigado, $nome! Sua mensagem foi enviada com sucesso.</div>";
    }else{
        echo "<div class='mensagem-erro'>Erro ao enviar a mensagem. Por favor, tente novamente.</div>";
    }

    mysqli_close($conexao);

