<?php
include_once dirname(__FILE__, 3) . "/Util.php";
?>

<!DOCTYPE html>
<html lang="en">

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

    <?php
    session_start();
    $login = !empty($_SESSION['nome']) ? $_SESSION['login'] : "";
    $url_projeto = "http://" . $_SERVER['HTTP_HOST'] . DIRECTORY_SEPARATOR; //pega o host do projeto
    ?>

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">
    <img src="./imagens/logo.png" alt="Logo" style="width: 60px;">   </a>
    <h3>Olá, <?php echo $login  ?></b>!</h3>
    <button class="btn btn-light"><a href="<?php echo $url_projeto ?>index.php">Sair</a></button>
</div>
</nav>
<br>
<div class="card">
  <div class="card-body">
    <h5><a href="<?php echo $url_projeto ?>view/base/main.php">Início</a></h5>
  </div>
</div>
<br>