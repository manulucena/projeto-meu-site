<?php

    include_once("../config.inc.php");

    $codigo = $_REQUEST['codigo'];

    $sql = "DELETE FROM produtos WHERE codigo = $codigo";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<div class='mensagem-sucesso'>Produto excluído com sucesso.</div>";
    }else{
        echo "<div class='mensagem-erro'>Não foi possível excluir o produto.</div>";
    }
  
    mysqli_close($conexao);