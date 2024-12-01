<link rel="stylesheet" href="../css/admin.css">
<h2>Lista de Depoimentos</h2>

<div id="lista-depoimentos">
    <?php
        include_once("../config.inc.php");

        $query = mysqli_query($conexao, "SELECT * FROM depoimentos");

        while ($tabela = mysqli_fetch_array($query)) {
            echo "<div class='depoimento'>";
            echo "<h3>Nome: $tabela[nome]</h3>";
            echo "<p><strong>Depoimento:</strong> $tabela[depoimento]</p>";
            echo "<a class='excluir' href='?pg=excluir_depoimento&id=$tabela[id]'>[x] Excluir depoimento</a>";
            echo "</div>";
        }

        mysqli_close($conexao);
    ?>
</div>
