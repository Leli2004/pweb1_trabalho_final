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

    <?php
    session_start();
    $login = !empty($_SESSION['nome']) ? $_SESSION['login'] : "";
    $url_projeto = "http://" . $_SERVER['HTTP_HOST'] . DIRECTORY_SEPARATOR; //pega o host do projeto
    ?>

<nav class="navbar bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand">
    <img src="../imagens/logo.png" alt="Logo" style="width: 60px;">   </a>
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

<br>
<div class="d-flex justify-content-around">   
<div class="card text-center" style="width: 12rem;">
        <img src="../imagens/usuario.png" class="card-img-top" alt="Ícone de usuário">
        <div class="card-body">
            <a href="../ContatoList.php" class="btn btn-dark">Usuários</a>
        </div>
    </div>
    <div class="card text-center" style="width: 12rem;">
        <img src="../imagens/medico.png" class="card-img-top" alt="Ícone de estetoscópio">
        <div class="card-body">   
            <a href="../FuncList.php" class="btn btn-dark">Funcionários</a>
        </div>
    </div>
    <div class="card text-center" style="width: 12rem;">
        <img src="../imagens/paciente.png" class="card-img-top" alt="Ícone de paciente">
        <div class="card-body">
            <a href="../PacienteList.php" class="btn btn-dark">Pacientes</a>
        </div>
    </div>
    <div class="card text-center" style="width: 12rem;">
        <img src="../imagens/consulta.png" class="card-img-top" alt="Ícone de consulta">
        <div class="card-body">
            <a href="../ConsultaList.php" class="btn btn-dark">Consultas</a>
        </div>
    </div>
</div>

    <?php include "./rodape.php"?>