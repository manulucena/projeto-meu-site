<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel Admin</title>
    <link rel="stylesheet" href="../css/admin.css"> <!-- Link para o CSS -->
</head>
<body>
    <!-- Cabeçalho -->
    <header class="header">
        <h1>Painel Admin | Espaço & Estilo</h1>
    </header>

    <!-- Menu de Navegação -->
    <nav>
        <ul>
            <li><a href="?pg=lista_msg">Lista Mensagens</a></li>
            <li><a href="?pg=lista_portfolio">Lista Portfólio</a></li>
            <li><a href="?pg=lista_produtos">Lista Produtos</a></li>
            <li><a href="?pg=lista_depoimentos">Lista Depoimentos</a></li>
        </ul>
    </nav>

    <!-- Container Principal -->

    <main>
        <?php
        include_once "sessao.php";

        if (logado()) {
            echo "<h3>Bem-vindo(a), <b>$_SESSION[usuario]</b>!</h3>";
        } else {
            header("Location: form_login.php");
            exit();
        }

        if (empty($_SERVER['QUERY_STRING'])) {
            echo "<h2>Página Inicial</h2>";
            echo "<section class='admin-welcome'>";
            echo "<p>Bem-vindo(a) ao Painel Administrativo do <b>Espaço & Estilo</b>!</p>";
            echo "<p>Aqui você tem total controle para gerenciar o conteúdo do site, incluindo:</p>";
            echo "<ul>";
            echo "<li><b>Mensagens:</b> Visualize e gerencie mensagens enviadas pelos clientes.</li>";
            echo "<li><b>Portfólio:</b> Cadastra, edite ou exclua projetos no portfólio.</li>";
            echo "<li><b>Produtos:</b> Administre os produtos recomendados no site.</li>";
            echo "<li><b>Depoimentos:</b> Gerencie os depoimentos dos clientes.</li>";
            echo "</ul>";
            echo "<p>Use o menu acima para navegar pelas funcionalidades do painel.</p>";
            echo "</section>";
        } else {
            $pg = $_GET['pg'];
            include_once("$pg.php");
        }
        ?>
</main>

</body>
</html>
