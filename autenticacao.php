<?php
    session_start ();
    if (!$_SESSION['autenticado'] || !isset($_SESSION['autenticado'])){
        header('location: index.php?login=erro2');
    }
    include_once "head.php";
    include_once "estrutura.php";
?>