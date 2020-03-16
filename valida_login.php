<?php
    session_start ();
    

    $autenticacao['autenticacao'] = false;
    $usuarios = array(
        array ('email' => 'adm@email.com','senha' => '123456', 'nome' => 'administrador'),
        array ('email' => 'kaike@email.com','senha' => 'abcdef', 'nome' => 'kaike programador'),
    );
    
    foreach($usuarios as $user) {
        if ($user['email'] == $_POST['email'] && $user['senha'] == $_POST['senha']) {
            $autenticacao['autenticacao'] = true;
            $autenticacao['nome'] = $user['nome'];
        }
    }

    if ($autenticacao['autenticacao']) {
        echo('o usuario '.$autenticacao['nome'].' esta logado!');
        $_SESSION['autenticado'] = true;
        header('location: home.php');
    } else {
        $_SESSION['autenticado'] = false;
        header('location: index.php?login=erros');
    } 


?>