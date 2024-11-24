<h2>Lista de Depoimentos</h2>

<?php

    include_once("../config.inc.php");

    $query = mysqli_query($conexao,"SELECT * FROM depoimentos");

    while($tabela = mysqli_fetch_array($query)){
        echo "Nome: $tabela[nome] <br>";
        echo "Depoimento: $tabela[depoimento] <br>";
        echo "<a href=?pg=excluir_depoimento&id=$tabela[id]>[x] Excluir depoimento</a><br>";
        echo "<hr>";
    }

    mysqli_close($conexao);