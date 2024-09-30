<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = ($_POST['nome']);
    $email = ($_POST['email']);
    $mensagem = ($_POST['mensagem']);

    // Mensagem de sucesso
    echo "<div class='mensagem-sucesso'>Obrigado, $nome! Sua mensagem foi enviada com sucesso.</div>";
} else {
    // Mensagem de erro
    echo "<div class='mensagem-erro'>Erro ao enviar a mensagem. Por favor, tente novamente.</div>";
}


?>




