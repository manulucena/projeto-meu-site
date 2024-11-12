<?php
    //Primeira Etapa do CRUD (Insert)
    include_once("config.inc.php");

    $nome = $_REQUEST['nome'];
    $feedback = $_REQUEST['feedback'];

    $sql = "INSERT INTO feedbacks
    (nome, feedback)
    VALUES
    ('$nome','$feedback')";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<div class='mensagem-sucesso'>Obrigado, $nome! Seu feedback foi enviado com sucesso.</div>";
    }else{
        echo "<div class='mensagem-erro'>Erro ao enviar seu feedback. Por favor, tente novamente.</div>";
    }

    mysqli_close($conexao);

