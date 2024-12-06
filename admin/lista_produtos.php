<link rel="stylesheet" href="../css/admin.css">
<h2>Lista de Produtos</h2>

<div id="novo-produto">
    <h3><a href="?pg=form_produto">Cadastrar novo produto</a></h3>
</div>

<div id="lista-produtos">
    <?php
        include_once("../config.inc.php");

        $query = mysqli_query($conexao, "SELECT * FROM produtos");

        while ($tabela = mysqli_fetch_array($query)) {
            echo "<div class='produto'>";
            echo "<h3>Nome: $tabela[nome]</h3>";
            echo "<p><strong>Categoria:</strong> $tabela[categoria]</p>";
            echo "<p><strong>Marca:</strong> $tabela[marca]</p>";
            echo "<p><strong>Preço:</strong> R$ " . number_format($tabela['preco'], 2, ',', '.') . "</p>";
            echo "<p><strong>Imagem:</strong> $tabela[imagem]</p>";
            echo "<p><strong>Fornecedor:</strong> $tabela[fornecedor]</p>";
            echo "<a class='excluir' href='?pg=excluir_produto&codigo=$tabela[codigo]'>[x] Excluir produto</a> ";
            echo "<a class='alterar' href='?pg=form_altera_produto&codigo=$tabela[codigo]'>[v] Alterar produto</a>";
            echo "</div>";
        }

        mysqli_close($conexao);
    ?>
</div>
