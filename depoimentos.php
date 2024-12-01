<?php
include_once("config.inc.php"); // Inclui o arquivo de conexão com o banco

// Consulta para buscar todos os depoimentos
$sql = "SELECT * FROM depoimentos ORDER BY id DESC";
$result = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Depoimentos</title>
    <link rel="stylesheet" href="css/estilo.css"> 
</head>
<body>
    <main>
        <section id="depoimentos-section">
            <div class="depoimentos-text">
                <h2>Depoimentos</h2>
                
                <?php
                // Exibe os depoimentos do banco de dados
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<p>\"" . htmlspecialchars($row['depoimento']) . "\" - " . htmlspecialchars($row['nome']) . "</p>";
                    }
                } else {
                    echo "<p>Nenhum depoimento encontrado.</p>";
                }
                ?>

                <!-- Formulário para novo depoimento -->
                <h2>Deixe seu depoimento:</h2>
                <form action="envia_depoimento.php" method="POST">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                    
                    <label for="depoimento">Depoimento:</label>
                    <textarea id="depoimento" name="depoimento" rows="5" required></textarea>
                    
                    <button type="submit">Enviar</button>
                </form>
            </div>
        </section>
    </main>
</body>
</html>

<?php
// Fecha a conexão com o banco de dados
mysqli_close($conexao);
?>


