<?php

include_once("config/url.php");
include_once("config/process.php");

if(isset($_SESSION['msg'])){
    $printMsg = $_SESSION['msg'];
    $SESSION['msg']= '';
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de Contatos</title>
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.2/css/bootstrap.min.css" integrity="sha512-SCpMC7NhtrwHpzwKlE1l6ks0rS+GbMJJpoQw/A742VaxdGcQKqVD8F/y/m9WLOfIPppy7mWIs/kS0bKgSI0Bfw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="<?= $BASE_URL ?>css/style.css">

</head>
<body>

<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary">  
    
<a class="navbar-brand" href="<?= $BASE_URL ?>index.php">
<img src="<?= $BASE_URL ?>img/logomarca.png" alt="Logo Agenda">
</a>

<div>
    <div class="navbar-nav">
        <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
        <a class="nav-link active" id="cadastro-link" href="<?= $BASE_URL ?>create.php">Adicionar adastro</a>
    </div>


</div>


</nav>

</header>