<?php
    //Primeira Etapa - Conexão ao servidor
    $conexao = mysqli_connect("localhost","Emanuelle","167528Ma*");
    //Segunda Etapa - Selecionar banco de dados
    $bd = mysqli_select_db($conexao,"bd_01");

    