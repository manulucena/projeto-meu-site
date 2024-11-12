<?php

    include_once("../config.inc.php");

    $codigo = $_REQUEST['codigo'];
    $nome = $_REQUEST['nome'];
    $categoria = $_REQUEST['categoria'];
    $marca = $_REQUEST['marca'];
    $preco = $_REQUEST['preco'];

    $sql = "UPDATE produtos SET
    nome = '$nome', categoria = '$categoria', marca = '$marca', preco = '$preco' 
    WHERE codigo = $codigo";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<div class='mensagem-sucesso'>Produto alterado com sucesso.</div>";
    }else{
        echo "<div class='mensagem-erro'>Não foi possível alterar o produto.</div>";
    }

    mysqli_close($conexao);