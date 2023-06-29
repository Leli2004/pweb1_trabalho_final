<?php
include '../controller/LoginController.php';

session_start();
$login = new LoginController();


if (!empty($_POST)) {

    $login->salvar($_POST);
    $_SESSION['dados'] = "";
    header("location: " . $_SESSION['url']);
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
<body>

<main class="container">
    <form action="RegistrarUsuarioForm.php" method="post">
      
    <main class="container">
        <h4>Registre-se no sistema:</h4> <br>

        <form action="login.php" method="post">
            <div>
                <label class="form-label">Nome</label>
                <input type="text" name="nome" class="form-control" value="<?php echo (!empty($dados['nome']) ? $dados['nome'] : "") ?>">
            </div>
            <div>
                <label class="form-label">Email</label>
                <input type="text" name="email" class="form-control" value="<?php echo (!empty($dados['email']) ? $dados['email'] : "") ?>">
            </div>
            <div>
                <label class="form-label">Telefone</label>
                <input type="text" name="telefone" class="form-control" value="<?php echo (!empty($dados['telefone']) ? $dados['telefone'] : "") ?>">
            </div>
            <div>
                <label class="form-label">Login</label>
                <input type="text" name="login" class="form-control" value="<?php echo (!empty($dados['login']) ? $dados['login'] : "") ?>">
            </div>
            <div>
                <label class="form-label">Senha</label>
                <input type="password"  name="senha" class="form-control" >
            </div>
            <div>
                <label class="form-label">Confirmar Senha</label>
                <input type="password" name="c_senha" class="form-control">
            </div>

            <div class="d-grid gap-2 col-2">
                <br><button class="btn btn-primary" type="submit"><h5>Cadastrar</h5></button>
            </div>
        </form><br>
        <a href="login.php"><h5>Voltar</h5></a>
    </main>

    <?php include "./base/rodape.php" ?>