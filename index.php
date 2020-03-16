<?php
    session_start ();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!--bootstrap 4-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- estilos -->
    <link rel="stylesheet" href="style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Help Desk</title>
</head>
<body>
    <?php
        include_once "estrutura.php";
    ?>
    <div class="corpo">
        <form class="formulario" action="valida_login.php" method="POST">
            
            <div class="cabecalho-login">
                Login
            </div>
            <div class="corpo-login" >
                <label for="email">Email:</label>
                <input class="input-texto" name="email" type="text">
                <label for="senha">Senha:</label>
                <input class="input-texto" name="senha" type="password">

                <!-- Controle de login -->
                <?php if(isset($_GET['login']) && $_GET['login'] == 'erros' ){ ?>

                    <div class="text-red p-2">
                        login ou senha inválidos!
                    </div>
                
                <?php } ?>

                <?php if(isset($_GET['login']) && $_GET['login'] == 'erro2' ){ ?>

                    <div class="text-red p-2">
                        forneça login válido antes de acessar outras páginas!
                    </div>

                <?php } ?>

                <input class="input-submit" type="submit" value="logar">
            </div>

        </form>
    </div>


</body>
</html>