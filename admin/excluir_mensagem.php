<?php
    
    include_once(".../config.inc.php");

    $id = $_REQUEST['id'];

    $sql = "DELETE FROM contatos WHERE id = $id";

    $query = mysqli_query($conexao,$sql);

    if($query){
        echo "<div class='mensagem-sucesso'>Mensagem apagada com sucesso.</div>";
    }else{
        echo "<div class='mensagem-erro'>Não foi possível apagar a mensagem.</div>";
    }
 