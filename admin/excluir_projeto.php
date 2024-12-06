<?php

    include_once("../config.inc.php");

    $codigo = $_REQUEST['codigo'];

    $sql = "DELETE FROM portfolio WHERE codigo = $codigo";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<div class='mensagem-sucesso'>Projeto excluído com sucesso.</div>";
    }else{
        echo "<div class='mensagem-erro'>Não foi possível excluir o projeto.</div>";
    }
  
    mysqli_close($conexao);