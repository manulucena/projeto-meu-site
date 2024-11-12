<?php
    //Primeira Etapa do CRUD (Insert)
    include_once("../config.inc.php");

    $nome = $_REQUEST['nome'];
    $categoria = $_REQUEST['categoria'];
    $descricao = $_REQUEST['descricao'];
    $imagem = $_REQUEST['imagem'];
    $data = $_REQUEST['data'];

    $sql = "INSERT INTO portfolio
    (nome, categoria, descricao, imagem, data)
    VALUES
    ('$nome','$categoria','$descricao','$imagem','$data')";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<div class='mensagem-sucesso'>Projeto cadastrado com sucesso ao portfólio.</div>";
    }else{
        echo "<div class='mensagem-erro'>Não foi possível cadastrar o projeto ao portfólio.</div>";
    }

    mysqli_close($conexao);