<link rel="stylesheet" href="../css/admin.css">
<h2>Lista de Mensagens</h2>

<div id="lista-mensagens">
    <?php
        include_once("../config.inc.php");

        $query = mysqli_query($conexao, "SELECT * FROM contatos");

        while ($tabela = mysqli_fetch_array($query)) {
            echo "<div class='mensagem'>";
            echo "<h3>Nome: $tabela[nome]</h3>";
            echo "<p><strong>E-mail:</strong> $tabela[email]</p>";
            echo "<p><strong>Assunto:</strong> $tabela[assunto]</p>";
            echo "<p><strong>Mensagem:</strong> $tabela[mensagem]</p>";
            echo "<a href='?pg=excluir_mensagem&id=$tabela[id]'>Excluir Mensagem</a>";
            echo "</div>";
        }

        mysqli_close($conexao);
    ?>
</div>
