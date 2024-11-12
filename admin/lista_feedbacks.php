<h2>Lista de Feedbacks</h2>

<?php

    include_once("../config.inc.php");

    $query = mysqli_query($conexao,"SELECT * FROM feedbacks");

    while($tabela = mysqli_fetch_array($query)){
        echo "Nome: $tabela[nome] <br>";
        echo "Feedback: $tabela[feedback] <br>";
        echo "<a href=?pg=excluir_feedback&id=$tabela[id]>[x] Excluir feedback</a><br>";
        echo "<hr>";
    }

    mysqli_close($conexao);