<?php
    session_start();

    $usuario_correto = "admin";
    $senha_correta = "1234";

    if(isset($_SESSION['usuario']) || isset($_COOKIE['usuario'])){
        header("Location: auxiliar.php");
        exit();
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        $usuario = $_POST['usuario'];
        $senha = $_POST['senha'];
        $lembrar = isset($_POST['lembrar']);

        if(($usuario === $usuario_correto) && ($senha === $senha_correta)){
            $_SESSION['usuario'] = $usuario;
            if($lembrar){
                setcookie("usuario", $usuario, time()*60*60*24*7,"/");
            }
            header("Location: auxiliar.php");
            exit();
        }else{
            $erro = "Usuario ou senha incorretos";
        }

    }
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h2>Login<h2>
        <form method="post">
            Usuário: <input type="text" name="usuario" required><br>
            Senha: <input type="password" name="senha" required><br>
            <input type="checkbox" name="lembrar">Lembrar-me<br>
            <button type="submit">Entrar</button>
        </form>
    </body>
</html>