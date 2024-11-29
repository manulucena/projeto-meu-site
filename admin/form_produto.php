<main>
<link rel="stylesheet" href="../css/admin.css">
    <section id="produto-section">
        <div class="produto-text">
            <h2>Produtos</h2>
            <form action="?pg=cadastra_produto" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required><br><br>
                
                <label for="categoria">Categoria:</label>
                <input type="text" id="categoria" name="categoria"><br><br>

                <label for="marca">Marca:</label>
                <input type="text" id="marca" name="marca"><br><br>
                
                <label for="preco">Preço:</label>
                <input type="text" id="preco" name="preco" required><br><br>
                
                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>
</main>
