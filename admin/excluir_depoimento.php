<?php
    
    include_once("../config.inc.php");

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM depoimentos WHERE id = $id";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<div class='mensagem-sucesso'>Depoimento apagado com sucesso.</div>";
    }else{
        echo "<div class='mensagem-erro'>Não foi possível apagar o depoimento.</div>";
    }