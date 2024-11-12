<main>
    <section id="contato-section">
        <div class="contato-text">
            <h2>Fale Conosco</h2>
            <form action="?pg=envia_mensagem" method="POST">
                <label for="nome">Nome:</label>
                <input type="text" id="nome" name="nome" required><br><br>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br><br>

                <label for="assunto">Assunto:</label>
                <input type="text" id="assunto" name="assunto"><br><br>
                
                <label for="mensagem">Mensagem:</label>
                <textarea id="mensagem" name="mensagem" rows="5" required></textarea><br><br>
                
                <button type="submit">Enviar</button>
            </form>
        </div>
    </section>
</main>

