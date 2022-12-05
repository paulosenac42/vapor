<?php 

require('autenticacao.php'); 
require('conexao.php');

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/global.css">
    <link rel="stylesheet" href="assets/normalize.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="shortcut icon" href="public/icons/favicon.ico" type="image/x-icon">
    <title>Vapor - Dashboard</title>
</head>

<body>

    <div id="container">

        <?php require('side-menu.php')?>

        <div id="sub-container">


            <div id="header">
                <div id="name">Dashboard</div>
                <div id="hello">Ola, <b>Administrador</b></div>
            </div>