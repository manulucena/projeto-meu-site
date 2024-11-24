<?php
include_once("config.inc.php"); // Conexão com o banco

// Verifique se uma categoria foi passada na URL e defina um padrão caso contrário
$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : 'residencial';

// Consulta SQL para buscar projetos da categoria especificada
$sql = "SELECT * FROM portfolio WHERE categoria = '$categoria'";
$result = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Portfólio</title>
    <link rel="stylesheet" href="css/estilo.css"> 
</head>
<body>
    <main>
        <section id="portfolio-section">
            <div class="portfolio-container">
                <h2>Portfólio</h2>
                <p>"Em cada um de nossos projetos, buscamos mais do que simplesmente decorar espaços; queremos criar experiências que refletem a identidade e as necessidades de nossos clientes. 
                    Através de uma abordagem detalhista e personalizada, desenvolvemos ambientes que são tanto funcionais quanto visualmente impressionantes.
                    De residenciais a comerciais, nossos projetos são pensados para promover conforto, estilo e praticidade. 
                    Cada detalhe, do mobiliário à iluminação, é escolhido para garantir que cada espaço conte uma história única. Com uma visão inovadora e um compromisso com a qualidade, nossa missão é transformar sonhos em realidade e criar ambientes que encantam e inspiram.
                    Explore alguns dos projetos que nos orgulham e veja como podemos ajudar a transformar seu espaço."</p>

                <!-- Menu de Categorias -->
                <div class="categorias">
                    <a href="?pg=portfolio&categoria=residencial">Residencial</a>
                    <a href="?pg=portfolio&categoria=comercial">Comercial</a>
                    <a href="?pg=portfolio&categoria=minimalista">Minimalista</a>
                    <a href="?pg=portfolio&categoria=flat/studio">Flat/Studio</a>
                    <a href="?pg=portfolio&categoria=reforma/fachadas">Reforma/Fachadas</a>
                </div>
F
                <!-- Exibindo os projetos da categoria selecionada -->
                <div class="portfolio-list">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='portfolio-item'>";
                        echo "<img src='" . htmlspecialchars($row['imagem']) . "' alt='" . htmlspecialchars($row['nome']) . "'>";
                        echo "<p><strong>" . htmlspecialchars($row['nome']) . "</strong> - " . htmlspecialchars($row['descricao']) . "</p>";
                        echo "</div>";
                    }
                } else {
                    echo "<p>Nenhum projeto encontrado para a categoria selecionada.</p>";
                }
                ?>
                </div>

            </div>
        </section>
    </main>
</body>
</html>

<?php
mysqli_close($conexao);
?>
