<?php
include_once("config.inc.php"); // Inclui o arquivo de conexão com o banco

// Consulta para buscar todos os feedbacks
$sql = "SELECT * FROM feedbacks ORDER BY id DESC";
$result = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Feedbacks</title>
    <link rel="stylesheet" href="css/estilo.css"> 
</head>
<body>
    <main>
        <section id="feedbacks-section">
            <div class="feedbacks-text">
                <h2>Feedbacks</h2>
                
                <?php
                // Exibe os feedbacks do banco de dados
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<p>\"" . htmlspecialchars($row['feedback']) . "\" - " . htmlspecialchars($row['nome']) . "</p>";
                    }
                } else {
                    echo "<p>Nenhum feedback disponível.</p>";
                }
                ?>

                <!-- Formulário para novo feedback -->
                <h2>Deixe seu feedback:</h2>
                <form action="envia_feedback.php" method="POST">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" required>
                    
                    <label for="feedback">Feedback:</label>
                    <textarea id="feedback" name="feedback" rows="5" required></textarea>
                    
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


