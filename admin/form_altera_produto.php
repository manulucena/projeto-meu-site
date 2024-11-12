<?php

    include_once("../config.inc.php");

    $codigo = $_REQUEST['codigo'];

    $sql = "SELECT * FROM produtos WHERE codigo = $codigo";

    $query = mysqli_query($conexao, $sql);

    $dados = mysqli_fetch_array($query);

?>

<main>
    <section id="produto-section">
        <div class="produto-text">
            <h2>Alterar Produtos</h2>
            <form action="?pg=altera_produto&codigo=<?= $dados['codigo']; ?>" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" value="<?= $dados['nome']; ?>" required><br><br>
                
                <label for="categoria">Categoria:</label>
                <input type="text" id="categoria" name="categoria" value="<?= $dados['categoria']; ?>"><br><br>

                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="marca" value="<?= $dados['marca']; ?>"><br><br>
                
                <label for="preco">Preço:</label>
                <textarea type="text" id="preco" name="preco" value="<?= $dados['preco']; ?>" required><br><br>
                
                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>
</main>


