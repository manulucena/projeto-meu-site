<?php
    include_once("Templates/topo.php");
    include_once("Templates/menu.php");

    if(empty($_SERVER['QUERY_STRING'])){
        $var = "home.php";
        include_once($var);
    }else{
        $pg = $_GET['pg'];
        include_once("$pg.php");
    }

    include_once("Templates/rodape.php");

?>