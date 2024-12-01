<link rel="stylesheet" href="../css/admin.css">
<h2>Lista de Portfólio</h2>

<div id="novo-projeto">
    <h3><a href="?pg=form_portfolio">Cadastrar novo projeto</a></h3>
</div>

<div id="lista-portfolio">
    <?php
        include_once("../config.inc.php");

        $query = mysqli_query($conexao, "SELECT * FROM portfolio");

        while ($tabela = mysqli_fetch_array($query)) {
            echo "<div class='projeto'>";
            echo "<h3>Nome: $tabela[nome]</h3>";
            echo "<p><strong>Categoria:</strong> $tabela[categoria]</p>";
            echo "<p><strong>Descrição:</strong> $tabela[descricao]</p>";
            echo "<p><strong>Imagem:</strong> $tabela[imagem]</p>";
            echo "<p><strong>Data:</strong> $tabela[data]</p>";
            echo "<a class='excluir' href='?pg=excluir_projeto&codigo=$tabela[codigo]'>[x] Excluir projeto</a> ";
            echo "<a class='alterar' href='?pg=form_altera_projeto&codigo=$tabela[codigo]'>[v] Alterar projeto</a>";
            echo "</div>";
        }

        mysqli_close($conexao);
    ?>
</div>
