<?php
include_once("Templates/topo.php");
include_once("Templates/menu.php");

if (empty($_SERVER['QUERY_STRING'])) {
    $var = "home.php";
    include_once($var);
} else {
    // Verifica se a página existe para evitar erros
    $pg = isset($_GET['pg']) ? $_GET['pg'] : 'home';
    $paginas_validas = ['home', 'quemsomos', 'portfolio', 'produtos', 'comofunciona', 'faleconosco', 'depoimentos'];

    // Carrega apenas as páginas permitidas
    if (in_array($pg, $paginas_validas)) {
        include_once("$pg.php");
    } else {
        include_once("404.php"); // página de erro caso não encontre
    }
}

include_once("Templates/rodape.php");
?>


