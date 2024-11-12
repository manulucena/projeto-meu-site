<h1>Painel Admin</h1>
<!-- Menu -->
<a href="?pg=lista_msg">Lista de Mensagens </a> |
<a href="?pg=lista_portfolio">Lista Portfólio </a> |
<a href="?pg=lista_produtos">Lista de Produtos </a> |
<a href="?pg=lista_feedbacks">Lista de Feedbacks </a> |

<?php

    if(empty($_SERVER['QUERY_STRING'])){
        $var = "conteudo.php";
        echo "<h2>Página inicial</h2>";
        //include_once($var);
    }else{
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }