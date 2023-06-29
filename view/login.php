<?php
include '../controller/LoginController.php';

session_start();

$login = new LoginController();

if (!empty($_POST)) {
    $login->logar($_POST);

    $dados = "";
    header("location: " . $_SESSION['url']);
} else if (!empty($_GET['sair'])) {
    session_destroy();
}
$dados = !empty($_SESSION['dados']) ? $_SESSION['dados'] : "";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ProgWeb I – 2023/1</title>
    <meta charset="utf-8">
    <link href="../../css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>

<body>

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid" >
    <a class="navbar-brand">
    <img src="imagens/logo.png" alt="Logo" style="width: 60px;"> </a>
     </div>
</nav> 
<hr>

    <main class="container">
        <h4>Acesse o sistema:</h4> <br>

        <form action="login.php" method="post">
                <label class="form-label">Login</label>
                <input type="text" name="login" class="form-control" value="<?php echo (!empty($dados['login']) ? $dados['login'] : "") ?>" />
                <label class="form-label">Senha</label>
                <input type="password" name="senha" class="form-control"/>
            <div class="d-grid gap-2 col-2">
                <br><button class="btn btn-primary" type="submit"><h5>Logar</h5></button>
            </div>
        </form><br>
        <a href="RegistrarUsuarioForm.php"><h5>Registrar-se</h5></a>
       </main>
    <?php include "./base/rodape.php"?>