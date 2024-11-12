<main>
    <section id="portfolio-section">
        <div>
            <h2>Portfólio</h2>
            <form action="?pg=cadastra_projeto_portfolio" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required><br><br>
                
                <label for="categoria">Categoria:</label>
                <input type="text" id="categoria" name="categoria"><br><br>

                <label for="descricao">Descrição:</label>
                <input type="text" id="descricao" name="descricao"><br><br>
                
                <label for="imagem">Imagem:</label>
                <input type="text" id="imagem" name="imagem" required><br><br>

                <label for="data">Data:</label>
                <input type="text" id="data" name="data" required><br><br>
                
                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>
</main>