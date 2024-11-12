<?php
include_once("config.inc.php"); // Conexão com o banco

// Verifique se uma categoria foi passada na URL e defina um padrão caso contrário
$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : 'Móveis';

// Consulta SQL para buscar produtos da categoria especificada
$sql = "SELECT * FROM produtos WHERE categoria = '$categoria'";
$result = mysqli_query($conexao, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Produtos Recomendados</title>
    <link rel="stylesheet" href="css/estilo.css"> 
</head>
<body>
    <main>
        <section id="produtos-section">
            <div class="produtos-container">
                <h2>Produtos Recomendados</h2>
                <p>"Na Espaço & Estilo, selecionamos com cuidado produtos que refletem nossa visão de design, qualidade e funcionalidade. 
                    Cada item foi escolhido para complementar nossos projetos de interiores, atendendo às necessidades dos nossos clientes e agregando estilo aos ambientes.
                    De móveis modernos a acessórios versáteis, nossos produtos oferecem soluções que combinam estética e praticidade, perfeitas para residências, escritórios e ambientes minimalistas. 
                    São peças que transformam qualquer espaço, oferecendo conforto e elegância para o seu dia a dia.
                    Explore nossa seleção e encontre os produtos ideais para criar o ambiente dos seus sonhos."</p>

                <!-- Menu de Categorias -->
                <div class="categorias">
                    <a href="?pg=produtos&categoria=Móveis">Móveis</a>
                    <a href="?pg=produtos&categoria=Decoração">Decoração</a>
                    <a href="?pg=produtos&categoria=Iluminação">Iluminação</a>
                    <a href="?pg=produtos&categoria=Cama%20%26%20Banho">Cama & Banho</a>
                </div>

                <!-- Exibindo os produtos da categoria selecionada -->
                <div class="produtos-list">
                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<div class='produtos-item'>";
                        if (!empty($row['fornecedor'])) {
                            echo "<a href='" . htmlspecialchars($row['fornecedor']) . "' target='_blank'>";
                        }
                        echo "<img src='" . htmlspecialchars($row['imagem']) . "' alt='" . htmlspecialchars($row['nome']) . "'>";
                        echo "<p><strong>" . htmlspecialchars($row['nome']) . "</strong> - R$ " . number_format($row['preco'], 2, ',', '.') . "</p>";
                        if (!empty($row['fornecedor'])) {
                            echo "</a>";
                        }
                        echo "</div>";
                    }
                } else {
                    echo "<p>Nenhum produto encontrado para a categoria selecionada.</p>";
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
