<?php
    //Primeira Etapa do CRUD (Insert)
    include_once("config.inc.php");

    $nome = $_REQUEST['nome'];
    $depoimento = $_REQUEST['depoimento'];

    $sql = "INSERT INTO depoimentos
    (nome, depoimento)
    VALUES
    ('$nome','$depoimento')";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<div class='mensagem-sucesso'>Obrigado, $nome! Seu depoimento foi enviado com sucesso.</div>";
    }else{
        echo "<div class='mensagem-erro'>Erro ao enviar seu depoimento. Por favor, tente novamente.</div>";
    }

    mysqli_close($conexao);

