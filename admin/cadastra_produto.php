<?php
    //Primeira Etapa do CRUD (Insert)
    include_once("../config.inc.php");

    $nome = $_REQUEST['nome'];
    $categoria = $_REQUEST['categoria'];
    $marca = $_REQUEST['marca'];
    $preco = $_REQUEST['preco'];

    $sql = "INSERT INTO produtos
    (nome, categoria, marca, preco)
    VALUES
    ('$nome','$categoria','$marca','$preco')";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<div class='mensagem-sucesso'>Produto cadastrado com sucesso.</div>";
    }else{
        echo "<div class='mensagem-erro'>Não foi possível cadastrar o produto.</div>";
    }

    mysqli_close($conexao);