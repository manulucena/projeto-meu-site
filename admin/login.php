<?php

include_once "../config.inc.php";

 $usuario = $_REQUEST['usuario'];
 $senha = $_REQUEST['senha'];

 $sql = "SELECT * FROM usuario WHERE usuario='$usuario'
  AND senha='$senha'";

 $resultado = mysqli_query($conexao, $sql);

if (mysqli_num_rows($resultado) > 0) {
    echo "<div class='mensagem-sucesso'>Deu bom.</div>";
    $dados = mysqli_fetch_array($resultado);
    if ($senha == $dados['senha']) {
        // Login válido
        session_start();
        $_SESSION['user_id'] = $dados['id'];
        $_SESSION['usuario'] = $dados['usuario'];

        header("Location: index.php");
    }else{
        header("Location: form_login.php");

    }
} else {
    // Login inválido
    echo "<div class='mensagem-erro'>Nome de usuário ou senha incorretos.</div>";
}

mysqli_close($conexao);

