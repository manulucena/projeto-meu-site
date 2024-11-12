<h2>Lista portfólio</h2>
<h3><a href="?pg=form_portfolio">Cadastrar novo projeto</a></h3>

<?php

    include_once("../config.inc.php");

    $query = mysqli_query($conexao,"SELECT * FROM portfolio");

    while($tabela = mysqli_fetch_array($query)){
        echo "Nome: $tabela[nome] <br>";
        echo "Categoria: $tabela[categoria] <br>";
        echo "Descrição: $tabela[descricao] <br>";
        echo "Imagem: $tabela[imagem] <br>";
        echo "Data: $tabela[data] <br>";
        echo "<a href=?pg=excluir_projeto&codigo=$tabela[codigo]>[x] Excluir projeto</a><br>";
        echo "<a href=?pg=form_altera_projeto&codigo=$tabela[codigo]>[v] Alterar projeto</a><br>";
        echo "<hr>";
    }

    mysqli_close($conexao);