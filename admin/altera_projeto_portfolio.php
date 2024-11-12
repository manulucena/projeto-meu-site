<?php

    include_once("../config.inc.php");

    $codigo = $_REQUEST['codigo'];
    $nome = $_REQUEST['nome'];
    $categoria = $_REQUEST['categoria'];
    $descricao = $_REQUEST['descricao'];
    $imagem = $_REQUEST['imagem'];
    $data = $_REQUEST['data'];

    $sql = "UPDATE portfolio SET
    nome = '$nome', categoria = '$categoria', descricao = '$descricao', imagem = '$imagem', data = '$data'
    WHERE codigo = $codigo";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<div class='mensagem-sucesso'>Projeto no portfólio alterado com sucesso.</div>";
    }else{
        echo "<div class='mensagem-erro'>Não foi possível alterar o projeto no portfólio.</div>";
    }

    mysqli_close($conexao);