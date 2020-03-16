<?php
    session_start();
    print_r($_SESSION);
    //remover indices de array
    //unset() remove indice se existir


    //destruir variável de sessão
    //session_destroy() variaveis continuam disponiveis enquanto não houver uma nova requisição
    session_destroy();
    header('location: index.php');
?>