<h2>Lista de Mensagens</h2>

<?php

    include_once("../config.inc.php");

    $query = mysqli_query($conexao,"SELECT * FROM contatos");

    while($tabela = mysqli_fetch_array($query)){
        echo "Nome: $tabela[nome] <br>";
        echo "E-mail: $tabela[email] <br>";
        echo "Assunto: $tabela[assunto] <br>";
        echo "Mensagem: $tabela[mensagem] <br>";
        echo "<a href=?pg=excluir_mensagem&id=$tabela[id]>[x] Excluir mensagem</a><br>";
        echo "<hr>";
    }

    mysqli_close($conexao);